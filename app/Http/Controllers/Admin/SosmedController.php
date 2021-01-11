<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class SosmedController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Setting::where('slug', 'social-media')->get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.sosmed.main', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.sosmed.form');
    }

    public function postAddSave(Request $request)
    {
    	$file = $request->file('file');

        $file_name = 'service'.time().$file->getClientOriginalName();
        $path = '/frontend/img/icon/';
        $file->move(public_path().$path, $file_name);

    	$add = new Setting;
    	$add->slug = 'service';
    	$add->type = 'image';
    	$add->file = $path.$file_name;
    	$add->title = $request->title;
    	$add->content = $request->content;
    	$save = $add->save();

        if ($save) {
        	Session::flash('success','Data Service Berhasil Di Simpan');
        	return redirect()->route('sosmed');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.sosmed.form', $data);
    }

    public function postUpdateSave(Request $request, $id)
    {
        $add = Setting::findOrFail($id);

        $file = $request->file('file');

        if ($file) {
            $file_name = 'service'.time().$file->getClientOriginalName();
            $path = '/frontend/img/icon/';
            $file->move(public_path().$path, $file_name);
            $add->file = $path.$file_name;
        }

        $add->slug = 'service';
        $add->type = 'image';
        $add->title = $request->title;
        $add->content = $request->content;
        $save = $add->save();

        if ($save) {
            Session::flash('success','Data Service Berhasil Di Update');
            return redirect()->route('sosmed');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Setting::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Slider Berhasil Di Delete');
            return redirect()->route('sosmed');
        }else {
            return 500;
        }
    }
}
