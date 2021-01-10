<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getIndex() {
    	return view('frontend.app');
    }

    public function getAbout() {
    	return view('frontend.about');
    }

    public function getGaleri() {
    	return view('frontend.galeri');
    }

    public function getTestimoni() {
    	return view('frontend.testimoni');
    }

    public function getBlogs() {
        return view('frontend.blogs');
    }

    public function getBlog($id) {
        $data['id'] = $id;
        return view('frontend.blog', $data);
    }
}
