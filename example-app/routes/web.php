<?php

use Illuminate\Support\Facades\Route;

Route::get('/web.php', function () {
    return view('planeten');
});

Route::get('/goku.php', function () {
    return view('planeten');
});