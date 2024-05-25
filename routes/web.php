<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/all-tags', function () {
    return view('pages.all_tags');
});


Route::get('/tag-1', function () {
    return view('tags.tag_1');
});

Route::get('/tag-2', function () {
    return view('tags.tag_2');
});

Route::get('/tag-4', function () {
    return view('tags.tag_4');
});

Route::get('/tag-5', function () {
    return view('tags.tag_5');
});

Route::get('/tag-7', function () {
    return view('tags.tag_7');
});

Route::get('/tag-8', function () {
    return view('tags.tag_8');
});