<?php

namespace App\Http\Controllers\Users;
//use Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\SavedJob;
use App\Models\Email;

use App\Models\Job;


class UsersController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }



    public function profile($id) {

        $user = User::findOrFail($id);


        $applyedJobs = Email::select('from_user', Auth::user()->email)->count();

        $createdJobs = Job::select($id)->where('user_id', $id)->count();

        return view('users.profile', compact('user' , 'createdJobs', 'applyedJobs'));
    }


    public function update(UsersRequest $request, $id) {

        $user = User::findOrFail($id);

        if($user) {
            $updateuser = $user->update(

                $request->all()

            );

            return redirect()->back()->with(['success' => 'updated']);
        }

        else {
             return redirect()->back('home');
        }

       // return "wtf";




    }

    public function updateImageGet($saved_id) {

        $user = User::findOrFail($saved_id);

        return view('users.image', compact('user'));
    }

    public function updateCv(Request $request, $id) {

        $y = User::findOrFail($id);

        Request()->validate([
            'document.*' => 'required|file|mimes:doc,docx,pdf|max:204800',


            'cv' => 'required|file|mimes:pdf|max:204800',


        ]);


        if($y)
            $y->update([

                'cv' =>  $request->cv->store('cvs','public'),

            ]);

        return redirect()->route('profile', ['id' => Auth::user()->id]);





    }

    public function updateImage(Request $request, $id) {

        $updateImage = User::findOrFail($id);

        Request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        if($updateImage)
             $updateImage->update([

            'image' =>  $request->image->store('images','public'),

         ]);

        return redirect()->route('profile', ['id' => Auth::user()->id]);





    }



    public function savedJobs($saved_id) {

        $saved_jobs = SavedJob::select()->where('user_id', $saved_id)->paginate(3);
        $saved_jobs_counter = SavedJob::select()->where('user_id', $saved_id)->count();


        return view('jobs.savedJobs', compact('saved_jobs', 'saved_jobs_counter'));

    }

    public function createMoreInfo() {

     

        return view('users.beforeHome');

    }
    
    public function storeMoreInfo(Request $request, $id) {

     

        $moreInfo = User::findOrFail($id);
        if($moreInfo)
        $moreInfo->update([

            'type' =>  $request->type,
            'user_desc' =>  $request->user_desc,

            ]);

        return redirect()->route('home');

    }

    public function profileForPublic($id) {
        $user = User::findOrFail($id);
        $companyJobs =  Job::select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype')->where('user_id', $id)->get();

      
 
      

        //return $companyJobs;

        return view('users.publicProfile', compact('user','companyJobs'));

    }

   
    

    public function myJobs($id) {
    

            $applications = DB::table('emails as A')
                ->join('emails as B', 'A.job_id_email', '=', 'B.job_id_email')
                ->RightJoin('jobs', 'A.job_id_email', '=', 'jobs.id')
                ->select('A.to_user', 'B.cv_user', 'B.user_id as applicant_id', 'A.job_id_email AS job_id_email', 
                'B.to_user','B.from_user AS from_user', 'jobs.user_id',
                'jobs.jobtitle')
                ->where('A.to_user', Auth::user()->email)
                ->distinct()
                ->get();
     
                //return $applications;
      
            return view('users.myJobs', compact('applications'));

       
    } 
/////////////////////////////////////////////////////////////////////////////////

    public function addUserInfo(Request $request, $token) {

        $users = User::where('remember_token', $token)->get();
        $msg = "リンクが無効です。";     
        
        if(count($users) > 0){

            $request->session()->put("id",$users[0]['id']);
            $request->session()->put("lastname",$users[0]['lastname']);
            $request->session()->put("firstname",$users[0]['firstname']);
            $request->session()->put("role",$users[0]['role']);
            $request->session()->put("email",$users[0]['email']);

            return view('profile.info');

        }
        
        return redirect()->route('user_register')->with('msg',$msg);

    }



    public function addCompanyInfo(Request $request, $token) {

        $users = User::where('remember_token', $token)->get();
        $msg = "リンクが無効です。";     
        
        if(count($users) > 0){

            $request->session()->put("id",$users[0]['id']);
            $request->session()->put("lastname",$users[0]['lastname']);
            $request->session()->put("firstname",$users[0]['firstname']);
            $request->session()->put("role",$users[0]['role']);
            $request->session()->put("email",$users[0]['email']);
            $request->session()->put("company",$users[0]['company']);

            return view('company.info');

        }
        
        return redirect()->route('company_register')->with('msg',$msg);

    }




    public function skills(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');


        $docs = [];
        $filenames = [];
        if($request->hasFile('files')) {
            
            $files = $request->file('files');                
            foreach ($files as $file) {
                
                $doc = $file->store('public/messages');
                array_push($docs, $doc);
                array_push($filenames, $file->getClientOriginalName());
            }
        }


        $data = $request->post();
        
        if(!isset($data['engineerDevelopmentPhase'])) $data['engineerDevelopmentPhase'] = [];
        if(!isset($data['engineerLanguageTools'])) $data['engineerLanguageTools'] = [];
        if(!isset($data['webDevelopmentPhase'])) $data['webDevelopmentPhase'] = [];
        if(!isset($data['webDevelopmentTools'])) $data['webDevelopmentTools'] = [];
        if(!isset($data['pmDevelopmentProduct'])) $data['pmDevelopmentProduct'] = [];
        if(!isset($data['pmDevelopmentPhase'])) $data['pmDevelopmentPhase'] = [];


        $arr = array(
            'filenames' => implode(',', $filenames),
            'files' => implode(',', $docs),
            'birthday' => $data['YYYY']."-".$data['mm']."-".$data['dd'],
            'gender' => $data['gender'],

            // 'country' => $data['country'],
            'country' => "Japan",

            'expYear' => $data['exp-year'],
            'wUnit' => $data['wUnit'],
            'wArea' => $data['wArea'],
            'status' => $data['status'],
            'phone' => $data['phone'],
            'category' => $data['category'],
            'engineerDevelopmentPhase' => implode(',', $data['engineerDevelopmentPhase']),
            'engineerLanguageTools' => implode(',', $data['engineerLanguageTools']),
            'webDevelopmentPhase' => implode(',', $data['webDevelopmentPhase']),
            'webDevelopmentTools' => implode(',', $data['webDevelopmentTools']),
            'pmDevelopmentProduct' => implode(',', $data['pmDevelopmentProduct']),
            'pmDevelopmentPhase' => implode(',', $data['pmDevelopmentPhase']),
            'details' => $data['details'],
            'created_by_id' => $id,
            'created_at' => date('Y-m-d h:i:s'),
        );

        $skill = DB::table('skills')->where('created_by_id',$id)->get();

        if(count($skill)==0)
            $res = DB::table('skills')->insert($arr);
        else
            $res = DB::table('skills')->where('created_by_id',$id)->update($arr);
        

        if($res) $msg = "スキル情報登録完了。";
        else $msg = "スキル情報登録失敗。";
        // return redirect()->route('user_info')->with('msg',$msg);
        return $msg;

    }


    public function info(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');

        $path = '';

        if($request->hasFile('file')) {
            
            $file = $request->file('file');  
            $path = $file->store('public/bg');    
            $request->session()->put("bg_image",$path);
            
        }
        
        $data = $request->post();
        $arr = array(
            'name' => $request->session()->get('company'),
            'url' => $data['url'],
            'phone' => $data['phone'],
            'bg_image' => $path,
            'found_at' => $data['found_at'],
            'capital' => $data['capital'],
            'ceo' => $data['ceo'],
            'employee' => $data['employee'],
            'address' => $data['address'],
            'details' => $data['details'],
            'created_by_id' => $request->session()->get('id'),
            'created_at' => date('Y-m-d h:i:s'),
        );

        $info = DB::table('company')->where('created_by_id',$request->session()->get('id'))->get();

        if(count($info)==0)
            $res = DB::table('company')->insert($arr);
        else
            $res = DB::table('company')->where('created_by_id',$request->session()->get('id'))->update($arr);
        

        if($res) $msg = "会社情報の送信完了。";
        else $msg = "会社情報の送信失敗。";
        // return redirect()->route('user_info')->with('msg',$msg);
        return $msg;
    }

    public function post(Request $request){

        $data = $request->post();
        $arr = array(
            'title' => $data['title'],
            'projectType' => $data['projectType'],
            'positions' => $data['positions'],            
            'details' => $data['details'],
            'skills' => $data['skills'],
            'estimate' => $data['estimate'],
            'mates' => $data['mates'],
            'address' => $data['address'],
            'during' => $data['during'],
            'wkdays' => $data['wkdays'],            
            'schedule' => $data['schedule'],            
            'created_by_id' => $request->session()->get('id'),
            'created_at' => date('Y-m-d h:i:s'),
        );

        // $project = DB::table('projects')->where('created_by_id',$request->session()->get('id'))->get();
        
        $res = DB::table('projects')->insert($arr);        

        if($res) $msg = "案件登録完了。";
        else $msg = "案件登録失敗。";

        // return redirect()->route('company_post')->with('msg',$msg);
        return $msg;

    }

    public function postUpdate(Request $request){

        $data = $request->post();
        $arr = array(
            'title' => $data['title'],
            'details' => $data['details'],
            'estimate' => $data['estimate'],
            'mates' => $data['mates'],
            'during' => $data['during'],
            'address' => $data['address'],
            'schedule' => $data['schedule'],
            'created_by_id' => $request->session()->get('id'),
            'created_at' => date('Y-m-d h:i:s'),
        );

        $project = DB::table('projects')->where('created_by_id',$request->session()->get('id'))->get();

        if(count($project)==0)
            $res = DB::table('projects')->insert($arr);
        else
            $res = DB::table('projects')->where('created_by_id',$request->session()->get('id'))->update($arr);
        

        if($res) $msg = "案件登録完了。";
        else $msg = "案件登録失敗。";
        return redirect()->route('company_post')->with('msg',$msg);

    }



    public function showUserInfo(Request $request){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');
        if(!isset($id)) return redirect()->route('login');
        elseif($role==1) return view('company.info');
        else{ 
            
            $languages = DB::table('skill_languages')->get();
            $user_skill = DB::table('skills')->where('created_by_id',$request->session()->get('id'))->get();
            return view('profile.info',compact('languages','user_skill'));
        
        }

    }

    public function showCompanyInfo(Request $request){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');

        if(!isset($id)) return redirect()->route('login');
        elseif($role==0) return view('profile.info');
        else{
             
            return view('company.info');
        }

    }

    public function showCompanyPost(Request $request){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');

        if(!isset($id)) return redirect()->route('login');
        elseif($role==0) return view('profile.info');
        else{
             
            return view('company.post');
        }

    }

    public function showCompanyProjects(Request $request){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');

        if(!isset($id)) return redirect()->route('login');
        elseif($role==0) return view('profile.info');
        else{
             

            $projects = DB::table('projects')->where('created_by_id', $id)->get();
            return view('company.projects', compact('projects'));
        }

    }

    public function delCompanyProjects(Request $request, $del_id){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');

        if(!isset($id)) return redirect()->route('login');
        elseif($role==0) return view('profile.info');
        else{
             
            $projects = DB::table('projects')->where('id', $del_id)->delete();
            return redirect()->back();
        }
    }


    public function apply(Request $request, $job_id, $client){

        $id = $request->session()->get('id');
        $role = $request->session()->get('role');
        
        if(!isset($id)) return redirect()->route('login');
        elseif($role==1) return redirect()->back();
        else{            
             
            $client_firstname = DB::table('users')->where('id', $client)->get('firstname');
            return view('profile.send', compact('job_id','client','client_firstname'));
        }
    }

    public function showUserSend(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{             

            //todo message!
            
            return view('profile.send');
        }
    }

    public function showUserSentList(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{             

            //todo message!

            $messages_ids = DB::table('sendMessage')
            ->where('send_id', $id)
            ->groupBy('project_id','receive_id')
            ->selectRaw('MAX(id)')
            ->get();

            $ids = [0];
            foreach($messages_ids as $key=>$value){
                foreach($value as $max=>$id){
                    array_push($ids, $id);
                }
            }

            $ids_str = "(".implode(',', $ids).")";

            // $messages = DB::table('sendMessage')->whereIn('id',$ids)->orderBy('created_at','desc')->get();           
            $sql = "SELECT sendMessage.*, sender.firstname AS send_name, receiver.id AS receive_id, receiver.firstname AS receive_name, receiver.photo AS receive_photo, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    JOIN users AS receiver ON receiver.id = sendMessage.receive_id 
                    WHERE sendMessage.id IN $ids_str 
                    ORDER BY sendMessage.created_at DESC";
            $messages = DB::select($sql);
            return view('profile.sentList', compact('messages'));
        }
    }

    public function showUserReceiveList(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{             

            //todo message!
            $messages_ids = DB::table('sendMessage')
            ->where('receive_id', $request->session()->get('id'))
            ->groupBy('project_id','send_id')
            ->selectRaw('MAX(id)')
            ->get();

            $ids = [0];
            foreach($messages_ids as $key=>$value){
                foreach($value as $max=>$id){
                    array_push($ids, $id);
                }
            }

            $ids_str = "(".implode(',', $ids).")";

            // $messages = DB::table('sendMessage')->whereIn('id',$ids)->orderBy('created_at','desc')->get();            
            $sql = "SELECT sendMessage.*, sender.id AS send_id, sender.firstname AS send_name, sender.photo AS send_photo, receiver.firstname AS receive_name, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    JOIN users AS receiver ON receiver.id = sendMessage.receive_id 
                    WHERE sendMessage.id IN $ids_str 
                    ORDER BY sendMessage.created_at DESC";
            $messages = DB::select($sql);

            return view('profile.receiveList', compact('messages'));
        }
    }

    public function showUserMessage(Request $request, $message_id){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{             

            //todo message!
            $message_info = DB::table('sendMessage')->where('id',$message_id)->get();
            
            $sql = "SELECT sendMessage.*, sender.id AS send_id, sender.role AS send_role, sender.firstname AS send_name, sender.photo AS send_photo, projects.id AS project_id, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    WHERE sendMessage.project_id = ".$message_info[0]->project_id."                     
                    AND (
                        (sendMessage.send_id = ".$message_info[0]->send_id." AND sendMessage.receive_id = ".$message_info[0]->receive_id.") OR 
                        (sendMessage.send_id = ".$message_info[0]->receive_id." AND sendMessage.receive_id = ".$message_info[0]->send_id.")
                    ) ORDER BY sendMessage.created_at ASC";
            
                    $messages = DB::select($sql);
            
            $job = DB::table('projects')->where('id', $message_info[0]->project_id)->get();

            if($id == $message_info[0]->send_id)
                $client = $message_info[0]->receive_id;
            else{
                $client = $message_info[0]->send_id;
                $update = DB::table('sendMessage')->where(array(
                    'send_id' => $client,
                    'project_id' => $message_info[0]->project_id,
                    'receive_id' => $id,
                ))->update(array('status'=>1));
            }
            // var_dump($messages); exit;
            return view('profile.message', compact('messages','client','job'));

        }
    }

    public function postMail(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{            

            // var_dump($request->file('files'));exit;

            $docs = [];
            $filenames = [];
            if($request->hasFile('files')) {
                
                $files = $request->file('files');                
                foreach ($files as $file) {
                    
                    $doc = $file->store('public/messages');
                    array_push($docs, $doc);
                    array_push($filenames, $file->getClientOriginalName());
                }
            }

            $data = $request->post();

            $arr = array(
                'project_id' => $data['project_id'],
                'send_id' => $request->session()->get('id'),
                'receive_id' => $data['receive_id'],
                'mailText' => $data['mailText'],
                'filenames' => implode(',', $filenames),
                'files' => implode(',', $docs),
                'created_at' => date('Y-m-d h:i:s'),
            );

            $res = DB::table('sendMessage')->insert($arr);        

            if($res) $msg = "メール送信完了。";
            else $msg = "メール送信失敗。";

            $role = $request->session()->get('role');
            if($role==0)
                return redirect()->route('user_sentList')->with('msg',$msg);
            else
                return redirect()->route('company_sentList')->with('msg',$msg);
        }
    }


    public function showUserFootprint(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $sql = "select footprint.*, users.role, users.firstname, users.photo from footprint join users on users.id = footprint.created_by_id where footprint.content = 'talent' and footprint.retriv_id != footprint.created_by_id and footprint.retriv_id = $id ORDER BY id DESC";
            $historis = DB::select($sql);
            DB::table('footprint')->where('retriv_id', $id)->update(array('status'=>1));
            return view('profile.footprint', compact('historis'));
        }
    }

    public function showUserReview(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $sql = "SELECT footprint.*, users.role, users.firstname, users.photo, NULL AS title FROM footprint JOIN users ON users.id = footprint.retriv_id     
                    WHERE footprint.retriv_id != footprint.created_by_id AND footprint.created_by_id = $id 
                    UNION
                    SELECT footprint.*, NULL AS ROLE, NULL AS firstname, NULL AS photo, projects.title FROM footprint JOIN projects ON projects.id = footprint.retriv_id 
                    WHERE footprint.retriv_id != footprint.created_by_id AND footprint.created_by_id = $id
                    ORDER BY id DESC";
            $historis = DB::select($sql);
            DB::table('footprint')->where('created_by_id', $id)->update(array('status'=>1));
            return view('profile.review', compact('historis'));
        }
    }
    
    public function showUserSetting(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.setting');
        }
    }

    public function showUserPlan(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.plan');
        }
    }

    public function showUserChange(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.info');///////////////////////////////////
        }
    }

    public function showUserPhoto(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.photo');
        }
    }

    public function showUserSocial(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.social');///////////////////////////////
        }
    }

    public function showUserLink(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.link');////////////////////////////////
        }
    }

    public function showUserEmail(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.email');
        }
    }

    public function showUserPassword(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.password');
        }
    }

    public function showUserPrivate(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.private');///////////////////////////////
        }
    }

    public function showUserClose(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('profile.close');
        }
    }





























    public function showCompanySetting(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.setting');
        }
    }


    public function showCompanyReceiveList(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            //todo message!
            $messages_ids = DB::table('sendMessage')
            ->where('receive_id', $request->session()->get('id'))
            ->groupBy('project_id','send_id')
            ->selectRaw('MAX(id)')
            ->get();

            $ids = [0];
            foreach($messages_ids as $key=>$value){
                foreach($value as $max=>$id){
                    array_push($ids, $id);
                }
            }

            $ids_str = "(".implode(',', $ids).")";

            // $messages = DB::table('sendMessage')->whereIn('id',$ids)->orderBy('created_at','desc')->get();            
            $sql = "SELECT sendMessage.*, sender.id AS send_id, sender.firstname AS send_name, sender.photo AS send_photo, receiver.firstname AS receive_name, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    JOIN users AS receiver ON receiver.id = sendMessage.receive_id 
                    WHERE sendMessage.id IN $ids_str 
                    ORDER BY sendMessage.created_at DESC";
            $messages = DB::select($sql);

            return view('company.receiveList', compact('messages'));

        }
    }


    public function showCompanySentList(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{             

            //todo message!

            $messages_ids = DB::table('sendMessage')
            ->where('send_id', $id)
            ->groupBy('project_id','receive_id')
            ->selectRaw('MAX(id)')
            ->get();

            $ids = [0];
            foreach($messages_ids as $key=>$value){
                foreach($value as $max=>$id){
                    array_push($ids, $id);
                }
            }
            $ids_str = "(".implode(',', $ids).")";

            // $messages = DB::table('sendMessage')->whereIn('id',$ids)->orderBy('created_at','desc')->get();           
            $sql = "SELECT sendMessage.*, sender.firstname AS send_name, receiver.firstname AS receive_name, receiver.firstname AS receive_name, receiver.photo AS receive_photo, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    JOIN users AS receiver ON receiver.id = sendMessage.receive_id 
                    WHERE sendMessage.id IN $ids_str 
                    ORDER BY sendMessage.created_at DESC";
            $messages = DB::select($sql);
            return view('company.sentList', compact('messages'));
        }
    }

    public function showCompanyMessage(Request $request, $message_id){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $message_info = DB::table('sendMessage')->where('id',$message_id)->get();

            $sql = "SELECT sendMessage.*, sender.id AS send_id, sender.role AS send_role, sender.firstname AS send_name, sender.photo AS send_photo, projects.id AS project_id, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    WHERE sendMessage.project_id = ".$message_info[0]->project_id."                     
                    AND (
                        (sendMessage.send_id = ".$message_info[0]->send_id." AND sendMessage.receive_id = ".$message_info[0]->receive_id.") OR 
                        (sendMessage.send_id = ".$message_info[0]->receive_id." AND sendMessage.receive_id = ".$message_info[0]->send_id.")
                    ) ORDER BY sendMessage.created_at ASC";
            
                    $messages = DB::select($sql);
            
            $job = DB::table('projects')->where('id', $message_info[0]->project_id)->get();
            
            if($id == $message_info[0]->send_id)
                $client = $message_info[0]->receive_id;
            else{
                $client = $message_info[0]->send_id;
                $update = DB::table('sendMessage')->where(array(
                    'send_id' => $client,
                    'project_id' => $message_info[0]->project_id,
                    'receive_id' => $id,
                ))->update(array('status'=>1));
            }
            return view('company.message', compact('messages','client','job'));
        }
    }

    public function showCompanyFootprint(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $sql = "select footprint.*, users.role, users.firstname, users.photo from footprint join users on users.id = footprint.created_by_id where footprint.content = 'company' and footprint.retriv_id != footprint.created_by_id and footprint.retriv_id = $id ORDER BY id DESC";
            $historis = DB::select($sql);

            DB::table('footprint')->where('retriv_id', $id)->update(array('status'=>1));
            return view('company.footprint', compact('historis'));

        }
    }

    public function showCompanyReview(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $sql = "SELECT footprint.*, users.role, users.firstname, users.photo, NULL AS title FROM footprint JOIN users ON users.id = footprint.retriv_id     
                    WHERE footprint.retriv_id != footprint.created_by_id AND footprint.created_by_id = $id 
                    UNION
                    SELECT footprint.*, NULL AS ROLE, NULL AS firstname, NULL AS photo, projects.title FROM footprint JOIN projects ON projects.id = footprint.retriv_id 
                    WHERE footprint.retriv_id != footprint.created_by_id AND footprint.created_by_id = $id
                    ORDER BY id DESC";
            $historis = DB::select($sql);

            DB::table('footprint')->where('created_by_id', $id)->update(array('status'=>1));
            return view('company.review', compact('historis'));
        }
    }


    public function showCompanyPlan(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.plan');
        }
    }


    public function showCompanyChange(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.change');
        }
    }
    

    public function showCompanyPhoto(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.photo');
        }
    }

    public function showCompanySocial(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.social');
        }
    }

    public function showCompanyLink(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.link');
        }
    }

    public function showCompanyEmail(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.email');
        }
    }

    public function showCompanyPassword(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.password');
        }
    }

    public function showCompanyPrivate(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.private');
        }
    }

    public function showCompanyClose(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            return view('company.close');
        }
    }

    public function profileImageUpload(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
            request()->validate([
                // 'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
                'file'  => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
            ]);
        
            if ($files = $request->file('file')) {
                    
                //store file into document folder
                $file = $request->file->store('public/photos');
                $request->session()->put("photo",$file);
        
                //store your file into database
                //$document = new Document();
                //$document->title = $file;
                //$document->save();

                $res = DB::table('users')->where('id',$id)->update(['photo'=>$file]);
                return Response()->json([
                    "success" => true,
                    "file" => $file
                ]);
        
            }
        
            return Response()->json([
                    "success" => false,
                    "file" => ''
                ]);
        }
    }


    public function changeUserPassword(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{

            $data = $request->post();
            $res = DB::table('users')->where('id',$id)->update(['password'=>md5($data['password'])]);
            return "changed";
        }

        

    }

    public function changeCompanyPassword(Request $request){


        $id = $request->session()->get('id');
        if(!isset($id)) return redirect()->route('login');
        else{
        
            $data = $request->post();
            $res = DB::table('users')->where('id',$id)->update(['password'=>md5($data['password'])]);
            return "changed";
        }
    }

}
