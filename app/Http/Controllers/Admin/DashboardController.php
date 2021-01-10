<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('admin.index');
    }

    public function postSearchFind(Request $request)
    {
        $data['data'] = Setting::where('slug', 'like', '%'.$request->search.'%')
                             ->orWhere('file', 'like', '%'.$request->search.'%')
                             ->orWhere('title', 'like', '%'.$request->search.'%')
                             ->orWhere('content', 'like', '%'.$request->search.'%')
                        ->get();
        return view('layouts.admin.partials.search', $data);
    }

    public function getSettingForm($id) {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.setting.form', $data);
    }

    public function postSettingSave(Request $request)
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
    	$add->type = $request->type;
    	$add->title = $request->title;
    	$add->content = $request->content;
    	$save = $add->save();

        if ($save) {
        	Session::flash('success','Data Setting Berhasil Di Simpan');
        	return redirect::back();
        }else {
        	return 500;
        }
    }

    public function postSettingUpdate(Request $request, $id)
    {
    	// dd($request->all());
    	$add = Setting::findOrFail($id);

    	$file = $request->file('file');

    	if ($file) {
	        $file_name = 'service'.time().$file->getClientOriginalName();
	        $path = '/frontend/img/icon/';
	        $file->move(public_path().$path, $file_name);
	    	$add->file = $path.$file_name;
    	}

    	$add->slug = $request->slug;
    	$add->type = $request->type;
    	$add->title = $request->title;
    	$add->content = $request->content;
    	$save = $add->save();

        if ($save) {
        	Session::flash('success','Data Setting Berhasil Di Simpan');
        	return Redirect()->back();
        }else {
        	return 500;
        }
    }
}
