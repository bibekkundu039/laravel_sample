<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Bibek"]);
});


Route::get('/teas', function () {
    $teas = [
        ["name" => "Masala Chai", "price" => 100, "id" => 1],
        ["name" => "Elachi Chai", "price" => 200, "id" => 2],
        ["name" => "Black Chai", "price" => 100, "id" => 3]
    ];
    return view('teas.index', ['teas' => $teas]);
});