<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['user:user', 'web'])->group(function () {


    Route::get('/user', function () {

        return 'Hello User';
    });

    Route::get('/user1', function () {

        return 'Hello User';
    });

    Route::get('/user2', function () {

        return 'Hello User';
    });

    Route::get('/user', function () {

        return 'Hello User';
    });
});

Route::get('/products', function () {

    $products = Product::all();
    return view('products',compact('products'));
});



Route::middleware(['user:admin', 'web'])->group(function () {

    Route::get('/admin', function () {
        return 'Hello boss';
    });
});
