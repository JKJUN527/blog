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

Route::get('/', function () {
    return view('index');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/project', function () {
    return view('projects');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/pictures', function () {
    return view('pictures');
});
Route::get('/contract', function () {
    return view('contract');
});
