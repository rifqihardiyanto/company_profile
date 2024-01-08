<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('authenticate.login');
    }

    public function register()
    {
        return view('authenticate.register');
    }

    public function register_action(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            Session::flash('errors', $validator->errors()->toArray());
            return redirect('register');
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        User::create($input);

        Session::flash('success', 'Akun Berhasil Dibuat.');
        return redirect('login');
    }

    public function login_action(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = request(['email', 'password']);
        Auth::attempt($credentials);
        return redirect('dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
