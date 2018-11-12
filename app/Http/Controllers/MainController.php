<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;
use Session;
use App\User;
use App\Ad;


class MainController extends Controller {

    static public $data = ['title' => 'K-Chord | '];

    function __construct() {
        $sql = "SELECT m.link,m.url FROM menus m "
                . "JOIN contents c ON m.id = c.menu_id "
                . "GROUP BY m.link,m.url";

        $categoriesSql = "SELECT c.title,c.url FROM categories c";
        self::$data['ads'] = Ad::all()->toArray();
        self::$data['random'] = rand(0, count(self::$data['ads']) - 1);
        self::$data['menu'] = DB::select($sql);
        self::$data['catDetails'] = DB::select($categoriesSql);
        
       
        
    }

}
