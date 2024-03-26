<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pano');
});

// Route::get("/pano", [panolensController::class, "panorama"]);

Route::get('pano', function () {
    return view('pano');
});
