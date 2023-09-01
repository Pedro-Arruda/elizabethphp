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

Route::get('/', function () {
    return View("paginas.index");
});

Route::get('/shop', function () {
    return View("paginas.shop");
});

Route::get('/about', function () {
    return View("paginas.about");
});

Route::get('/services', function () {
    return View("paginas.services");
});

Route::get('/blog', function () {
    return View("paginas.blog");
});

Route::get('/contact', function () {
    return View("paginas.contact");
});
