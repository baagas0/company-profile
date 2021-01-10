<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Setting;
use Auth;
use Session;

class BlogController extends Controller
{
    public function getIndex()
    {
    	$data['data'] = Blog::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.blog.main', $data);
    }

    public function getPage()
    {
    	$data['data'] = Setting::whereIn('slug', ['blog-banner', 'blog-background', 'blog-description'])->get();
        return view('admin.blog.page', $data);
    }

    public function getAdd()
    {
    	// $data['data'] = Slider::get();
    	// Session::flash('success','Ini notifikasi SUKSES');
        return view('admin.blog.form');
    }

    public function postAddSave(Request $request)
    {
    	$file = $request->file('image');

        $file_name = 'blog'.time().$file->getClientOriginalName();
        $path = '/frontend/img/blog/';
        $file->move(public_path().$path, $file_name);

    	$add = new Blog;
        $add->user_id = Auth::user()->id;
    	$add->image = $path.$file_name;
    	$add->title = $request->title;
    	$add->content = $request->content;
    	$save = $add->save();

        if ($save) {
        	Session::flash('success','Data Slider Berhasil Di Simpan');
        	return redirect()->route('blog');
        }else {
        	return 500;
        }
    }

    public function getUpdate($id)
    {
        $data['data'] = Blog::findOrFail($id);
        return view('admin.blog.form', $data);
    }

    public function getUpdatePage($id)
    {
        $data['data'] = Setting::findOrFail($id);
        return view('admin.blog.pageform', $data);
    }

    public function postUpdateSave(Request $request, $id)
    {
        $add = Blog::findOrFail($id);

        $gambar = $request->file('image');

        if ($gambar) {
            $gambar_name = 'testimoni'.time().$gambar->getClientOriginalName();
            $path = '/frontend/img/testimonial/';
            $gambar->move(public_path().$path, $gambar_name);
            $add->image = $path.$gambar_name;
        }

        $add->user_id = Auth::user()->id;
        $add->title = $request->title;
        $add->content = $request->content;
        $save = $add->save();

        if ($save) {
            Session::flash('success','Data Blog Berhasil Di Update');
            return redirect()->route('blog');
        }else {
            return 500;
        }
    }

    public function getDelete($id) {
        $delete = Blog::findOrFail($id);
        $delete = $delete->delete();

        if ($delete) {
            Session::flash('success','Data Blog Berhasil Di Delete');
            return redirect()->route('blog');
        }else {
            return 500;
        }
    }
}
