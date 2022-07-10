<?php

namespace App\Http\Controllers\Auth;
use Mail; 

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;






class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
       
        return 'user/more-info';
    }

 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $data = $request->post();
        $users = User::where(array('email'=>$data['email'], 'role'=>0))->count();
        $msg = "メールアドレスが重複しました。";
        $token = Str::random(64);
        
        if($users < 1){
            User::create([
                'lastname' => $data['lastname'],
                'firstname' => $data['firstname'],
                // 'lastname_kana' => $data['lastname_kana'],
                // 'firstname_kana' => $data['firstname_kana'],
                'email' => $data['email'],
                'password' => md5($data['password']),
                'type' => "jobSeeker",
                'remember_token' => $token,
            ]);

            //send email

            $msg = "弊社よりお送りするメールに記載の上、ご返信をお願いします。";
        }

        // return redirect()->back()->with('msg',$msg);
        return $msg;
    }


    protected function company(Request $request)
    {

        $data = $request->post();
        $users = User::where(array('email'=>$data['email'], 'role'=>1))->count();
        $msg = "メールアドレスが重複しました。";
        $token = Str::random(64);
        if($users < 1){
            User::create([
                'company' => $data['company'],
                'lastname' => $data['lastname'],
                'firstname' => $data['firstname'],
                'mobile' => $data['phone'],
                'email' => $data['email'],
                'password' => md5($data['password']),
                'user_desc' => $data['requestdetails'],
                'role' => 1,
                'type' => "company",
                'remember_token' => $token,
                'user_desc' => $data['requestdetails'],
            ]);

            //send email

            $msg = "弊社よりお送りするメールに記載の上、ご返信をお願いします。";
        }

        // return redirect()->back()->with('msg',$param);
        return $msg;
    }
}
