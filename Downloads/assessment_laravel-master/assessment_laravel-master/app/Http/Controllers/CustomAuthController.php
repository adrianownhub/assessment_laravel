<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'fullname' => 'required|unique:user_tbl,fullname',
            'username' => 'required|unique:user_tbl,username',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        

        return redirect('login')->withSuccess('You have signed-up');
    }

    public function create(array $data){
        $insert1 = User::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
   
}
