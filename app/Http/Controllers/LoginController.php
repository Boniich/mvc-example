<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private Login $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if ($this->login->login($email, $password)) {
            return view('successfully_login');
        } else {
            return view('invalid_credentials');
        }
    }
}
