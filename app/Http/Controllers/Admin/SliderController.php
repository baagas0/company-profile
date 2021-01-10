<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Session;

class SliderController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.slider.main', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.slider.form');
    }

    public function postAddSave(Request $request)
    {
    	$gambar = $request->file('image');

        $gambar_name = 'slider'.time().$gambar->getClientOriginalName();
        $path = '/frontend/img/slider/';
        $gambar->move(public_path().$path, $gambar_name);

        $add = new Slider;
        $add->image = $path.$gambar_name;
        $add->content = $request->content;
        $add->is_link = $request->link;
        $add->is_active = $request->has('active');
        $save = $add->save();

        if ($save) {
        	Session::flash('success','Data Slider Berhasil Di Simpan');
        	return redirect()->route('slider');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Slider::findOrFail($id);
        return view('admin.slider.form', $data);
    }

    public function postUpdateSave(Request $request, $id)
    {
        $add = Slider::findOrFail($id);

        $gambar = $request->file('image');

        if ($gambar) {
            $gambar_name = 'slider'.time().$gambar->getClientOriginalName();
            $path = '/frontend/img/slider/';
            $gambar->move(public_path().$path, $gambar_name);
            $add->image = $path.$gambar_name;
        }

        $add->content = $request->content;
        $add->is_link = $request->link;
        $add->is_active = $request->has('active');
        $update = $add->save();

        if ($update) {
            Session::flash('success','Data Slider Berhasil Di Update');
            return redirect()->route('slider');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Slider::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Slider Berhasil Di Delete');
            return redirect()->route('slider');
        }else {
            return 500;
        }
    }
}
