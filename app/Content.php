<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Content extends Model {

    static public function getContent($murl, &$data) {

        $data['contents'] = DB::table('contents')
                ->join('menus', 'menus.id', '=', 'contents.menu_id')
                ->select('menus.title as mtitle', 'contents.*')
                ->where('menus.url', '=', $murl)
                ->get()
                ->toArray();
        if(! $data['contents']){
            abort(404);
        }
        $data['title'] .= $data['contents'][0]->mtitle ?? '';
    }
    
    static public function save_new($request){
        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Content saved');
    }
    
    static public function update_item($request, $id){
        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Content updated');

    }

}
