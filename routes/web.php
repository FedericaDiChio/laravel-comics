<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    $products = config('comics');
    return view('components.products', ['products' => $products]);
})->name('products');

Route::get('/products/{id}', function ($id){
    $products = config('comics');
    if(is_numeric($id) && $id >= 0 && $id < count($products)) {
        $product = $products[$id];
        return view ('components.product', compact('product'));
    } abort('404');
})->name('product');


Route::get('/characters', function () {
    return view('components.characters');
})->name('characters');