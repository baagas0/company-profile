<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class AboutController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Setting::whereIn('slug', ['about-us', 'about-video', 'about-video-thumbnail', 'sejarah', 'visi' ,'misi', 'knowledge-progress'])->get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.about.main', $data);
    }

    public function getPengalaman()
    {
        $data['data'] = Setting::whereIn('slug', ['knowledge-progress'])->get();
        return view('admin.about.main', $data);
    }

    public function getPage()
    {
    	$data['data'] = Setting::whereIn('slug', ['about-banner', 'knowledge-image', 'knowledge-background'])->get();
        return view('admin.about.main', $data);
    }

    public function getAdd()
    {
        return view('admin.about.form');
    }

    public function postAddSave(Request $request)
    {
    	$add = new Setting;

    	$file = $request->file('file');
        if ($file) {
            $file_name = 'service'.time().$file->getClientOriginalName();
            $path = '/frontend/img/icon/';
            $file->move(public_path().$path, $file_name);
        	$add->file = $path.$file_name;
        }

    	$add->slug = $request->slug;
    	$add->type = 'image';
    	$add->title = $request->title;
        $add->value = $request->value;
    	$add->content = $request->content;
    	$save = $add->save();

        if ($save) {
        	Session::flash('success','Data Slider Berhasil Di Simpan');
        	return redirect()->route('about');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.about.form', $data);
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

        $add->slug = $request->slug;
        $add->type = 'image';
        $add->title = $request->title;
        $add->value = $request->value;
        $add->content = $request->content;
        $save = $add->save();

        if ($save) {
            Session::flash('success','Data Slider Berhasil Di Simpan');
            return redirect()->route('about');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Setting::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Slider Berhasil Di Delete');
            return redirect()->route('about');
        }else {
            return 500;
        }
    }
}
