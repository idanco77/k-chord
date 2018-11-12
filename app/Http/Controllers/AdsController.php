<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use App\Ad;
use Session;

class AdsController extends MainController {

    function __construct() {
        parent::__construct();
        self::$data['title'] .= 'Ads admin panel';
    }

    public function index() {
        self::$data['ads'] = Ad::all()->toArray();
        return view('cms.ads', self::$data);
    }

    public function create() {
        return view('cms.add_ad', self::$data);
    }

    public function store(AdsRequest $request) {
        Ad::save_new($request);
        return redirect('cms/ads');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        self::$data['ads'] = Ad::find($id)->toArray();
        return view('cms.edit_ad', self::$data);
    }

    public function update(AdsRequest $request, $id) {
        Ad::update_item($request, $id);
        return redirect('cms/ads');
    }

    public function destroy($id) {
        Ad::destroy($id);
        Session::flash('sm', 'Ad removed');
        return redirect('cms/ads');
    }

}
