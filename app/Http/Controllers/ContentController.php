<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Menu;
use App\Content;
use Session;


class ContentController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Contents Admin Panel';
    }

    public function index() {
        self::$data['contents'] = Content::all()->toArray();
        return view('cms.content', self::$data);
    }

    public function create() {
        self::$data['menu'] = Menu::all()->toArray();
        return view('cms.add_content', self::$data);
    }

    public function store(ContentRequest $request) {
        Content::save_new($request);
        return redirect('cms/content');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['menus'] = Menu::all()->toArray();
        self::$data['item'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$data);
    }

    public function update(ContentRequest $request, $id) {
        Content::update_item($request, $id);
        return redirect('cms/content');
    }

    public function destroy($id) {
        Content::destroy($id);
        Session::flash('sm', 'Administrator, item removed');
        return redirect('cms/content');
    }

}
