<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Menu;
use Session;

class MenuController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Menu Admin Panel';
    }

    public function index() {
        self::$data['menus'] = Menu::all()->toArray();
        return view('cms.menu', self::$data);
    }

    public function create() {
        return view('cms.add_menu', self::$data);
    }

    public function store(MenuRequest $request) {
        Menu::save_new($request);
        return redirect('cms/menu');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['item'] = Menu::find($id)->toArray();
        return view('cms.edit_menu', self::$data);
    }

    public function update(MenuRequest $request, $id) {
        Menu::update_item($request, $id);
        return redirect('cms/menu');
    }

    public function destroy($id) {
        Menu::destroy($id);
        Session::flash('sm', 'Administrator, item removed');
        return redirect('cms/menu');
    }

}
