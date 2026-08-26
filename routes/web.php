<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'E-Portfolio | Dimple Kate B. Bodonia']);
});
