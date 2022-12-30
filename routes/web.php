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



Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');

Route::get('/blog',
	function(){
		$posts = [
			['title' => 'First Post'],
			['title' => 'Second Post'],
			['title' => 'Third Post'],
			['title' => 'Fourth Post']
		];
		return view('blog',['posts' => $posts]);
	}
)->name('blog');

Route::view('/about','about')->name('about');