<?php

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




Route::any('/', function () {
		$tmp = DB::table('password_resets')->select('*')->get();
	$users = ["users" => DB::table('users')->select('email')->get(), "passwd" => $tmp];
		$lol = ["users" => DB::table('users')->select('name')->get(), "passwd" => $tmp];

    return view('welcome')->with($users);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
