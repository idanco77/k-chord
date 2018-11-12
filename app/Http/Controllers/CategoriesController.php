<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Categorie;
use Session;

class CategoriesController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Categories Admin Panel';
    }

    public function index() {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    public function create() {
        return view('cms.add_category', self::$data);
    }

    public function store(CategoriesRequest $request) {
        Categorie::save_new($request);
        return redirect('cms/categories');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['item'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }

    public function update(CategoriesRequest $request, $id) {
        Categorie::update_item($request, $id);
        return redirect('cms/categories');
    }

    public function destroy($id) {
        Categorie::destroy($id);
        Session::flash('sm', 'Category removed');
        return redirect('cms/categories');
    }

}
