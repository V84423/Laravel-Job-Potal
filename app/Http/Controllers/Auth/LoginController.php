<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        // $this->middleware('guest:admin')->except('logoutAdmin');
    }

    protected function logoutAdmin(Request $request)
    {
        $this->guard()->logout();

       $request->session()->flush();

        $request->session()->regenerate();

        return redirect('admin/login');
    }


    //overriding login and register pages

    public function showLoginForm()
    {
        return view('logins.login');
    }

    public function login(Request $request)
    {
        $data = $request->post();
        $users = User::where('email', $data['email'])->get();

        if(count($users) == 0){
            $msg = "登録されていないメールです。 もう一度入力してください。";
        }else if(md5($data['password']) != $users[0]['password']){
            $msg = "パスワードが正しくありません。";
        }else{

            $request->session()->put("id",$users[0]['id']);
            $request->session()->put("lastname",$users[0]['lastname']);
            $request->session()->put("firstname",$users[0]['firstname']);
            $request->session()->put("company",$users[0]['company']);   
            $request->session()->put("role",$users[0]['role']);
            
            if($users[0]['role']==1){

                $company = DB::table('company')->where('created_by_id',$users[0]['id'])->get();
                if(count($company)!=0)
                    $request->session()->put("bg_image",$company[0]->bg_image);
                else
                    $request->session()->put("bg_image",'');

            }
            
            $request->session()->put("email",$users[0]['email']);
            $request->session()->put("photo",$users[0]['photo']);   

            
            // var_dump($request->session()); exit;
            $msg = "success";
            return $msg;

        }
        
         // return redirect()->back()->with('msg',$msg);
        return $msg;
    }

    public function logout(Request $request){

            $request->session()->flush();
            return redirect('/');
    }

    public function showRegistrationForm()
    {
        return view('logins.register');
    }

    public function showCompanyRegistrationForm(){

        return view('logins.company_register');
        
    }
}
