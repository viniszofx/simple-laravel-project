<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function ()  {
    return view('pages.home', ['title' => 'Home']);
});