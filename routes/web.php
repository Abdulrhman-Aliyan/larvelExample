<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;

Route::get('/', [StaticController::class, 'index']) -> name('home.index');
Route::get('/about', [StaticController::class, 'about']) -> name('home.about');
Route::get('/contact', [StaticController::class, 'contact']) -> name('home.contact');

Route::resource('/computers', ComputersController::class);

/* Route::get('/store', function () {
    $filter = request('style');

    if(isset($filter)) {
        return '<h1> this page is viewing <span style="color: red">'. strip_tags($filter) .'</span> </h1>';
    }

    return '<h1> this page is viewing <span style="color: red">All Products</span> </h1>';
});
 */

 Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if(isset($category)) {
        if(isset($item)) {
            return "<h1>{$item}</h1>";
        }
        return "<h1>{$category}</h1>";
    }

    return '<h1>Store</h1>';
});