<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class SettingController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Setting::whereIn('slug', [
    		'title',
    		'favicon',
    		'logo-white',
    		'logo-dark',
    		'alamat',
    		'phone',
    		'email',
    		'sejarah'
    	])->get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.setting.main', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.service.form');
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
        	return redirect()->route('service');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.service.form', $data);
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
            return redirect()->route('service');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Setting::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Slider Berhasil Di Delete');
            return redirect()->route('service');
        }else {
            return 500;
        }
    }
}
