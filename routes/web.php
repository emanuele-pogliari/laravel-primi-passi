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
    $message = "Hello World!";

    $boolean = "Languages and frameworks learned so far:";
    $array = ["html", "css", "javascript", "vue", "vite", "php", "database", "mysql"];

    return view('home', compact("message", "boolean", "array"));
});

Route::get('/page2', function () {
    $msgPage2 = "Hello World Page2!";
    return view('page2', compact("msgPage2"));
})->name('page2');

Route::get('/page3', function () {
    $msgPage3 = "Hello World Page3!";
    return view('page3', compact("msgPage3"));
})->name('page3');

Route::get('/page4', function () {
    $msgPage4 = "Hello World Page4!";
    return view('page4', compact("msgPage4"));
})->name('page4');

Route::get('/page5', function () {
    $msgPage5 = "Hello World Page5!";
    return view('page5', compact("msgPage5"));
})->name('page5');
