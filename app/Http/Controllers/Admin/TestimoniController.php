<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonies;
use Session;

class TestimoniController extends Controller
{
    public function getIndex() {
    	$data['data'] = Testimonies::get();
    	return view('admin.testimoni.main', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.testimoni.form');
    }

    public function postAddSave(Request $request)
    {
    	$gambar = $request->file('image');

        $gambar_name = 'slider'.time().$gambar->getClientOriginalName();
        $path = '/frontend/img/slider/';
        $gambar->move(public_path().$path, $gambar_name);

        $add = new Testimonies;
        $add->image = $path.$gambar_name;
        $add->name = $request->name;
        $add->content = $request->content;
        $save = $add->save();

        if ($save) {
        	Session::flash('success','Data Testimoni Berhasil Di Simpan');
        	return redirect()->route('testimoni');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Testimonies::findOrFail($id);
        return view('admin.testimoni.form', $data);
    }

    public function postUpdateSave(Request $request, $id)
    {
        $add = Testimonies::findOrFail($id);

        $gambar = $request->file('image');

        if ($gambar) {
            $gambar_name = 'testimoni'.time().$gambar->getClientOriginalName();
            $path = '/frontend/img/testimonial/';
            $gambar->move(public_path().$path, $gambar_name);
            $add->image = $path.$gambar_name;
        }

        $add->name = $request->name;
        $add->content = $request->content;
        $update = $add->save();

        if ($update) {
            Session::flash('success','Data Testimoni Berhasil Di Update');
            return redirect()->route('testimoni');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Testimonies::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Testimoni Berhasil Di Delete');
            return redirect()->route('testimoni');
        }else {
            return 500;
        }
    }
}
