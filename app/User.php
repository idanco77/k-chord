<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,
    Session,
    Hash,
    Image;

class User extends Model {

    static public function verify_user($email, $password) {
        $valid = false;
        $sql = "SELECT * FROM users u "
                . "JOIN users_roles ur ON u.id = ur.uid "
                . "WHERE u.email = ?";

        if ($user = DB::select($sql, [$email])) {
            $user = $user[0];
            if (Hash::check($password, $user->password)) {
                $valid = true;
                if ($user->rid == 8) {
                    Session::put('is_admin', true);
                }
                Session::put('user_name', $user->name);
                Session::put('user_id', $user->id);
                Session::put('user_image', $user->image);
                Session::flash('sm', $user->name . ', welcome back!');
            }
        }
        return $valid;
    }

    static public function new_user($request) {
        $image_name = 'default-profile-image.png';
        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            $file = $request->file('profile_image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('profile_image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(180, 180);
            $img->save();
        }

        $user = new self();
        $user->name = $request['fname'] . ' ' . $request['lname'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->image = $image_name;
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUES($uid, 2)");

        Session::flash('sm', $request['fname'] . ' ' . $request['lname'] . ', you registered successfully ');
    }

    static public function update_profile($request, $id) {
        $image_name = User::find($id)->toArray();
        $image_name = $image_name['image'];

        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            $file = $request->file('profile_image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('profile_image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(250, 250);
            $img->save();
        }

        $user = self::find($id);

        $user->name = $request['name'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->image = $image_name;
        $user->save();

        Session::put('user_name', $user->name);
        Session::put('user_image', $user->image);
        Session::flash('sm', $request['name'] . ', your profile updated successfully');
    }

    static public function get_users() {
        $sql = "SELECT u.*, ur.rid FROM users u JOIN users_roles ur ON u.id = ur.uid";
        return DB::select($sql);
    }

    static public function save_user($request) {
        $image_name = 'default-profile-image.png';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(180, 180);
            $img->save();
        }

        $user = new self();
        $user->name = $request['name'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->image = $image_name;
        $user->save();

        $uid = $user->id;
        
        DB::insert('insert into users_roles (uid, rid) values (?, ?)', [$uid, $request['role']]);

        Session::flash('sm', 'User added');
    }

    static public function update_user($request, $id) {
        $image_name = User::find($id)->toArray();
        $image_name = $image_name['image'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(180, 180);
            $img->save();
        }

        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->address = $request['address'];
        $user->image = $image_name;
        $user->save();

        $uid = $user->id;
        DB::update('UPDATE users_roles SET rid = ? WHERE uid = ?', [$request['role'], $uid]);
        

        Session::flash('sm', 'User updated');
    }

}
