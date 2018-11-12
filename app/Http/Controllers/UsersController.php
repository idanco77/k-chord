<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\User;
use Session;

class UsersController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Users admin panel';
    }

    public function index() {
        self::$data['users'] = User::get_users();
        return view('cms.users', self::$data);
    }

    public function create() {
        return view('cms.add_user', self::$data);
    }

    public function store(UsersRequest $request) {
       User::save_user($request);
       return redirect('cms/users');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['user'] = User::find($id)->toArray();         
        return view('cms.edit_user', self::$data);
    }

    public function update(UsersRequest $request, $id) {
       
        User::update_user($request, $id);
        return redirect('cms/users');
            
        
    }

    public function destroy($id) {
        User::destroy($id);
        Session::flash('sm', 'User removed');
        return redirect('cms/users');
    }

}
