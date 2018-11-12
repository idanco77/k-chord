<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Categorie;
use App\Product;
use Session;
use DB;

class ProductsController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Products Admin Panel';
    }

    public function index() {
        Product::show_products(self::$data);
        return view('cms.products', self::$data);
    }

    public function create() {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.add_product', self::$data);
    }

    public function store(ProductsRequest $request) {
        Product::save_new($request);
        return redirect('cms/products');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['item'] = Product::find($id)->toArray();
        return view('cms.edit_product', self::$data);
    }

    public function update(ProductsRequest $request, $id) {
        Product::update_item($request, $id);
        return redirect('cms/products');
    }

    public function destroy($id) {
        Product::destroy($id);
        Session::flash('sm', 'Product removed');
        return redirect('cms/products');
    }

}
