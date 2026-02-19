<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $static = public_path('index.html');

    if (file_exists($static)) {
        return response()->file($static);
    }

    return view('index');
});