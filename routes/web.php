<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
});




Route::group(['prefix' => 'admin'], function(){
    
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/customer', [PageController::class, 'customer']);
    Route::get('/invoice', [PageController::class, 'invoice']);
    Route::get('/payment', [PageController::class, 'payment']);
    Route::get('/managepost', [PageController::class, 'managepost']);
    Route::get('/account', [PageController::class, 'account']);

    Route::get('/create', function () {
        return view('admin.create');
    });
    Route::get('/create-post', function () {
        return view('admin.create-post');
    });
    Route::get('/create-invoice', function () {
        return view('admin.create-invoice');
    });
    


    
});
