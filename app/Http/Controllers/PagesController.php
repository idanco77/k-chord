<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DB;

class PagesController extends MainController {

    public function home() {
        self::$data['title'] = 'K-Chord';
        return view('content.home', self::$data);
    }

    public function content($url) {
        Content::getContent($url, self::$data);

        return view('content.general', self::$data);
    }
    
    public function about(){
        self::$data['title'] .= 'About';
        return view('content.about', self::$data);
    }

    
}
