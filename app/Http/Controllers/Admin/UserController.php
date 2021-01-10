<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash as Bcrypt;
use Session;

class UserController extends Controller
{
    public function getProfile() {
    	return view('admin.user.profile');
    }

    public function getAdd() {
    	return view('admin.user.add');
    }

    public function postAddSave(Request $request) {
    	$add = new User;
    	$add->name = $request->name;
    	$add->email = $request->email;
    	$add->password = Bcrypt::make($request->password);
    	$add->adress = $request->adress;
    	$save = $add->save();

    	if ($save) {
        	Session::flash('success','Data User Baru Berhasil Di Simpan');
        	return redirect()->back();
        }else {
        	return 500;
        }
    }
}
