<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Session;
use App\User;
use App\Order;

class ProfileController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Profile';
    }

    public function index() {
        self::$data['profile'] = User::find(Session::get('user_id'))->toArray();
        self::$data['orders'] = Order::get_orders();
        return view('content.orders', self::$data);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
         self::$data['profile'] = User::find(Session::get('user_id'))->toArray();
        self::$data['orders'] = Order::get_orders();
        return view('content.user_profile', self::$data);
    }

    public function edit($id) {
        self::$data['profile'] = User::find($id)->toArray();
        return view('content.edit_profile', self::$data);
    }

    public function update(ProfileRequest $request, $id) {
        User::update_profile($request, $id);
        return redirect('profile/' . $id . '/edit');
    }

    public function destroy($id) {
        //
    }

}
