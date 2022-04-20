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
    // inserito array dinamico da stampare con foreach
    $team =[
        [
           "name" => "Luca"
        ],
        [
            "name" => "Antonio"
        ],
        [
            "name" => "Michela"
        ],
    ];
    
    return view('pages.home',[
        "team" => $team
    ]);
});

// seconda chiamata(root)

Route::get('/contact', function () {

    
    return view('contact');
});
