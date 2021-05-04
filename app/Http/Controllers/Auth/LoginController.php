<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Student;

// use Illuminate\Support\Facades\Auth;
use Auth;
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
        $this->middleware('guest')->except('logout');
    }




    public function redirectToFacebbok(){
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebbokCallback(){
        $user =  Socialite::driver('facebook')->user();

        $this->_loginOrRegister($user);
        return redirect('/#');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_loginOrRegister($user);

          return redirect('/');
    }

    public function _loginOrRegister($data){
        $user = User::where('email' , '=' , $data->email)->first();
        if (!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->save();
            $student = new Student();
            $student->user_id = $user->id;
            $student->government = "cairo";
            $student->birthday = "2021-05-01";
            $student->save();
        }
        

        Auth::login($user);
    }
}