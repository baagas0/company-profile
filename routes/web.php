<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

routeController('/', 'FrontEndController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth:sanctum'], function() {
	route::group(['prefix' => 'admin'], function(){
		routeController('/', 'Admin\DashboardController');
		routeController('user', 'Admin\UserController');
		routeController('sosmed', 'Admin\SosmedController');
		routeController('slider', 'Admin\SliderController');
		routeController('service', 'Admin\ServiceController');
		routeController('about', 'Admin\AboutController');
		routeController('galeri', 'Admin\GaleriController');
		routeController('blog', 'Admin\BlogController');
		routeController('testimoni', 'Admin\TestimoniController');
		routeController('setting', 'Admin\SettingController');
	});

});
