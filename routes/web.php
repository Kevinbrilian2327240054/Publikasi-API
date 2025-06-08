<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $npm = '2327240054';
    $nama = 'Kevin Brilian';
    return view('home', compact('npm', 'nama'));
});
