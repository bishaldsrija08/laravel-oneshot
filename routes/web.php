<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get("/about", function() {
//     return view('about');
// });

Route::get("/about/{name}", function($name) {
    return view('about', ['name' => $name]);
});

Route::redirect('/about', '/about/John');


Route::get("/blog", [BlogController::class, 'index'])->name('blog.index');