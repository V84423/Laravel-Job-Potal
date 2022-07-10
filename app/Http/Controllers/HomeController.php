<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Job;
use App\Models\Search;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $id = $request->session()->get('id');

        if(isset($id)) return redirect()->route('projects');
        else{

            $sql = "SELECT projects.*, users.photo, users.id AS user_id FROM projects 
                    JOIN users ON users.id = projects.created_by_id 
                    ORDER BY projects.id DESC LIMIT 14 ";

            // $randomJobs = DB::table('projects')->orderBy('id', 'desc')->take(14)->get();
            $newsJobs = DB::select($sql);
            $retrivClients = DB::table('company')->orderBy('retriv', 'desc')->take(14)->get();
            $postJobsClients = DB::table('company')->orderBy('post_jobs', 'desc')->take(14)->get();
            
            return view('home', compact('newsJobs', 'retrivClients', 'postJobsClients'));
        }
    }



    public function details(Request $request, $id) {

        $job = DB::table('projects')->where('id',$id)->get();
        $randomJobs = DB::table('projects')->orderBy('id', 'desc')->take(5)->get();

        $created_by_id = $request->session()->get('id');
        if(isset($created_by_id)) {
            DB::table('footprint')->insert(array(
                'retriv_id' => $id,
                'content' => 'project',
                'created_at' => date('Y-m-d h:i:s'),
                'created_by_id' => $created_by_id
            ));
        }

        return view('includes.detail', compact('job', 'randomJobs'));

    }

    public function talent(Request $request) {

        $sql = "select skills.*, users.id as user_id, users.firstname as user_name, users.photo as user_photo
                from skills join users on users.id = skills.created_by_id 
                order by skills.created_at asc";
        $talents = DB::select($sql);

        return view('includes.talent', compact('talents'));

    }



    public function talentDetails(Request $request, $id){

        $user = DB::table('users')->where('id', $id)->get();
        $skill = DB::table('skills')->where('created_by_id', $id )->get();        

        $created_by_id = $request->session()->get('id');
        if(isset($created_by_id)) {
            DB::table('footprint')->insert(array(
                'retriv_id' => $id,
                'content' => 'talent',
                'created_at' => date('Y-m-d h:i:s'),
                'created_by_id' => $created_by_id
            ));
        }

        return view('includes.talentDetail', compact('user','skill'));

    }

    public function companyDetails(Request $request, $id){
        
        $user = DB::table('users')->where('id', $id)->get();
        $company = DB::table('company')->where('created_by_id', $id)->get();
        
        $created_by_id = $request->session()->get('id');
        if(isset($created_by_id)) {
            DB::table('footprint')->insert(array(
                'retriv_id' => $id,
                'content' => 'company',
                'created_at' => date('Y-m-d h:i:s'),
                'created_by_id' => $created_by_id
            ));
        }

        return view('includes.companyDetail', compact('user','company'));

    }


    public function projects(Request $request)
    {

        $id = $request->session()->get('id');

        if(!isset($id)) return redirect()->route('login');
        else{
             
            // $randomJobs = DB::table('projects')->orderBy('id', 'desc')->take(10)->get();
            $sql = "select projects.*, 
                    company.id as company_id, company.bg_image as company_bg,
                    users.id as user_id, users.photo as user_photo, users.firstname as user_name, users.company as user_company
                    from projects join users on users.id = projects.created_by_id 
                                  join company on company.created_by_id = projects.created_by_id 
                    order by created_at desc limit 5";

            $randomJobs = DB::select($sql);
            
            $allJobs = DB::table('projects')->orderBy('id', 'desc')->count();
            $getJobs = $allJobs;
            return view('includes.projects', compact('randomJobs', 'allJobs', 'getJobs'));

        }

        
    }
    
    public function search(Request $request) {


        $id = $request->get('id');
        $randomJobs = DB::table('projects')->orderBy('id', 'desc')->take(10)->get();
        return view('includes.search', compact('randomJobs'));

    }


    public function client(Request $request) {

        $id = $request->get('id');
        $randomClients = DB::table('company')->orderBy('id', 'desc')->take(10)->get();
        return view('includes.client', compact('randomClients'));

    }




    public function searchEvent($part, $val){

        $randomJobs = DB::table('projects')->where($part, 'like', '%'.$val.'%')->orderBy('id', 'desc')->take(10)->get();
        return view('includes.search', compact('randomJobs'));

    }


    public function service(Request $request) {

        return view('includes.service');

    }

    public function agreement(Request $request) {

        return view('includes.agreement');

    }

    public function privacy_policy(Request $request) {

        return view('includes.privacy-policy');

    }
    
    public function notification(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return 0;
        else{
            
            // $messages = DB::table('sendMessage')->where(array('receive_id'=>$id, 'status'=>0))->get();
            $sql = "SELECT sendMessage.id as message_id, sendMessage.created_at as message_at, sender.firstname AS send_name, sender.role AS send_role, sender.company AS send_company, sender.photo AS send_photo, projects.title AS project_title FROM sendMessage 
                    JOIN projects ON projects.id = sendMessage.project_id 
                    JOIN users AS sender ON sender.id = sendMessage.send_id 
                    WHERE sendMessage.receive_id = $id and sendMessage.status = 0";
            
            $messages = DB::select($sql);

            return $messages;
        }
    }

    public function download($filepath, $filename){

        $headers = ['Content-Type: application/octet-stream'];
        $contents = Storage::get("public/messages/".$filepath);
        return response()->streamDownload(function () use ($contents) {
            echo $contents;
        }, $filename);

    }

    
    public function searchProject(Request $request){

        $id = $request->session()->get('id');
        if(!isset($id)) return 0;
        else{
            
            $data = $request->post();

            if($data['keyword']==NULL) $keyword = ''; else $keyword = $data['keyword'];
            if($data['skill']==NULL) $positions = ''; else $positions = "and (projects.positions = '".str_replace(",","' or projects.positions = '",$data['skill'])."')";
            if($data['estimate']==NULL) $estimate = ''; else $estimate = $data['estimate'];

            

            $start = ($data['page'] - 1)*5;

            $sql = "select projects.*, 
                    company.id as company_id, company.bg_image as company_bg, 
                    users.id as user_id, users.photo as user_photo, users.firstname as user_name, users.company as user_company 
                    from projects 
                    join users on users.id = projects.created_by_id 
                    join company on company.created_by_id = projects.created_by_id 
                    where (users.company like '%$keyword%' or projects.title like '%$keyword%') ".$positions." and projects.estimate like '%$estimate%' 
                    limit $start, 5";

            $projects = DB::select($sql);

            $sql = "select count(*)
                    from projects 
                    join users on users.id = projects.created_by_id 
                    join company on company.created_by_id = projects.created_by_id 
                    where (users.company like '%$keyword%' or projects.title like '%$keyword%') ".$positions." and projects.estimate like '%$estimate%'";
            $getJobs = DB::select($sql);
            return array('projects'=>$projects, 'getJobs'=>$getJobs);

        }
    }

    public function projectSearch(Request $request){

            
            $data = $request->post();

            if($data['keyword']==NULL) $keyword = ''; else $keyword = $data['keyword'];
            if($data['skill']==NULL) $skill = ''; else $skill = $data['skill'];
            if($data['position']==NULL) $position = ''; else $position = $data['position'];
            if($data['address']==NULL) $address = ''; else $address = $data['address'];
            if($data['estimate']==NULL) $estimate = ''; else $estimate = $data['estimate'];
            

            $sql = "select projects.*, 
                    company.id as company_id, company.bg_image as company_bg, 
                    users.id as user_id, users.photo as user_photo, users.firstname as user_name, users.company as user_company 
                    from projects 
                    join users on users.id = projects.created_by_id 
                    join company on company.created_by_id = projects.created_by_id 
                    where (users.company like '%$keyword%' or projects.title like '%$keyword%' or projects.details like '%$keyword%' or projects.skills like '%$keyword%' or projects.positions like '%$keyword%' or projects.address like '%$keyword%' or projects.schedule like '%$keyword%') 
                    and projects.skills like '%$skill%' 
                    and projects.positions like '%$position%' 
                    and projects.estimate like '%$estimate%' 
                    and projects.address like '%$address%' 
                    order by projects.id desc
                    limit 0, 14";

            $projects = DB::select($sql);

            return $projects;

    }






    public function searchCompany(Request $request){
        
            $data = $request->post();
            if($data['keyword']==NULL) $keyword = ''; else $keyword = $data['keyword'];

            
            $sql = "select * from company where 
                    name like '%$keyword%' or 
                    address like '%$keyword%' or 
                    details like '%$keyword%' or 
                    url like '%$keyword%' 
                    order by id desc 
                    limit 0, 14";

            $companys = DB::select($sql);

            return $companys;

    }

    





























 

    ////////////////////////////////////account////////////////////////////////////////////////////
    
    public function skill(Request $request) {


        return view('profile.skill');

    }



    public function account_home(Request $request) {


        return view('profile.account');

    }

    public function account_board(Request $request) {


        return view('profile.board');

    }

    public function account_message_receive(Request $request) {


        return view('profile.receive');

    }


    public function account_message_send(Request $request) {


        return view('profile.send');

    }


    public function account_visit(Request $request) {


        return view('profile.visit');

    }


    public function account_review(Request $request) {


        return view('profile.review');

    }

    

    public function account_register(Request $request) {


        return view('profile.register');

    }

    public function account_confirm(Request $request) {


        return view('profile.confirm');

    }

    public function account_change(Request $request) {


        return view('profile.change');

    }


    public function account_photo(Request $request) {


        return view('profile.photo');

    }

    public function account_social(Request $request) {


        return view('profile.social');

    }


    public function account_mutual(Request $request) {


        return view('profile.mutual');

    }


    public function account_email(Request $request) {


        return view('profile.email');

    }


    public function account_password(Request $request) {


        return view('profile.password');

    }

    public function account_plan(Request $request) {


        return view('profile.plan');

    }

    public function account_private(Request $request) {


        return view('profile.private');

    }

    public function account_close(Request $request) {


        return view('profile.close');

    }

    public function account_free(Request $request) {


        return view('profile.free');

    }
    ///////////////////company//////////////////////////

    public function info(Request $request) {


        return view('company.info');

    }

    public function post(Request $request) {


        return view('company.post');

    }


    public function company(Request $request) {


        return view('includes.company');

    }



    public function company_home(Request $request) {


        return view('company.account');

    }

    public function company_board(Request $request) {


        return view('company.board');

    }

    public function company_message_receive(Request $request) {


        return view('company.receive');

    }


    public function company_message_send(Request $request) {


        return view('company.send');

    }


    public function company_visit(Request $request) {


        return view('company.visit');

    }


    public function company_review(Request $request) {


        return view('company.review');

    }

    

    public function company_register(Request $request) {


        return view('company.register');

    }

    public function company_confirm(Request $request) {


        return view('company.confirm');

    }

    public function company_change(Request $request) {


        return view('company.change');

    }


    public function company_photo(Request $request) {


        return view('company.photo');

    }

    public function company_social(Request $request) {


        return view('company.social');

    }


    public function company_mutual(Request $request) {


        return view('company.mutual');

    }


    public function company_email(Request $request) {


        return view('company.email');

    }


    public function company_password(Request $request) {


        return view('company.password');

    }

    public function company_plan(Request $request) {


        return view('company.plan');

    }

    public function company_private(Request $request) {


        return view('company.private');

    }

    public function company_close(Request $request) {


        return view('company.close');

    }

    public function company_free(Request $request) {


        return view('company.free');

    }


    //////////////////////////////////////// My Page ///////////////////////////////////////////


    public function chat(Request $request) {


        return view('mypage.chat');

    }





    ////////////////////////////////////////////////////////////////////////////////////////////
    
    


    public function contract(Request $request) {


        return view('includes.contract');

    }


    //////////////////////////////////////////////////////////////////////////////////////////////






    public function contact() {

        return view('jobs.contact');

    }


    public function storeContact(ContactRequest $request) {

        $data = [
            'msg'      => $request->msg,
            'name'      => $request->name,
            'email'    => $request->email,
            'subject' => $request->subject,
            'to'      => "2633bfc764@firemailbox.club"

        ];

        $to = "2633bfc764@firemailbox.club";
        //write the email of your company up


        $mail = \Mail::to($to)->send(new SendMail($data));

        if($mail)
            echo "done";
    }


}
