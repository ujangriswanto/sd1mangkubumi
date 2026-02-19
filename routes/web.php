<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

    if (file_exists($static)) {
        return response()->file($static);
    }

    return view('welcome');
});

