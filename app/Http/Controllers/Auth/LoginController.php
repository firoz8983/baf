<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

        protected function redirectTo(){
            if(Auth::user()->role==('System Admin')){
                return 'systemadmin';
            }
            else if(Auth::user()->role=='OC'){
               return 'oc';
            }
            else if(Auth::user()->role=='ACO'){
                    return 'aco';
            }
            else if(Auth::user()->role=='System User'){
                return 'systemuser';
            }
            else
            {
                return '/login';
            }
        }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
   
    
}
