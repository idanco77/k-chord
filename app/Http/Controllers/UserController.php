<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ProfileRequest;
use App\User;
use App\Order;
use Session;

class UserController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('signedguard', ['except' => ['logout']]);
    }

    public function login() {

        self::$data['title'] .= 'Login';
        return view('forms.login', self::$data);
    }

    public function postLogin(LoginRequest $request) {
        $rn = !empty($request['rn']) ? $request['rn'] : '';
        if (User::verify_user($request['email'], $request['password'])) {
            return redirect($rn);
        } else {
            self::$data['title'] .= 'Login';
            return view('forms.login', self::$data)->withErrors(['wrong_login' => 'Wrong email or password']);
        }
    }

    public function register() {
        self::$data['title'] .= 'Register';
        return view('forms.register', self::$data);
    }

    public function postRegister(RegisterRequest $request) {
        User::new_user($request);
        return redirect('user/login');
    }

    public function logout() {
        Session::flush();
        return redirect('user/login');
    }

}
