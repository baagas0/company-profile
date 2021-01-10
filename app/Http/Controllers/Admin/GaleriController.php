<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Setting;
use Session;

class GaleriController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Galery::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.galeri.main', $data);
    }

    public function getPage()
    {
    	$data['data'] = getSetting('galeri-banner');
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.galeri.page', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.galeri.form');
    }

    public function postAddSave(Request $request)
    {
    	$gambar = $request->file('image');

        $gambar_name = 'galeri'.time().$gambar->getClientOriginalName();
        $path = '/frontend/img/galeri/';
        $gambar->move(public_path().$path, $gambar_name);

        $add = new Galery;
        $add->image = $path.$gambar_name;
        $add->testimoni_id = $request->testimoni_id;
        $add->title = $request->title;
        $add->description = $request->description;
        $save = $add->save();

        if ($save) {
        	Session::flash('success','Data Galeri Berhasil Di Simpan');
        	return redirect()->route('galeri');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Galery::findOrFail($id);
        return view('admin.galeri.form', $data);
    }

    public function getUpdatePage($id)
    {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.galeri.pageform', $data);
    }

    public function postUpdateSave(Request $request, $id)
    {
        $add = Galery::findOrFail($id);

        $gambar = $request->file('image');

        if ($gambar) {
            $gambar_name = 'testimoni'.time().$gambar->getClientOriginalName();
            $path = '/frontend/img/testimonial/';
            $gambar->move(public_path().$path, $gambar_name);
            $add->image = $path.$gambar_name;
        }


        $add->testimoni_id = $request->testimoni_id;
        $add->title = $request->title;
        $add->description = $request->description;
        $save = $add->save();

        if ($save) {
            Session::flash('success','Data Galeri Berhasil Di Update');
            return redirect()->route('galeri');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Galery::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Galeri Berhasil Di Delete');
            return redirect()->route('galeri');
        }else {
            return 500;
        }
    }
}
