<?php

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

Auth::routes(['register' => false]);

Route::get('/home', function() {
    return view('home');
    
    /*if (Auth::user()->can('edit_or_update')) {
        
    } else {
        
    }*/
})->name('home')->middleware(['auth', 'is_admin']);

Route::prefix('public')->group(function () {
    Route::get('/test', function () {
        return view('test');
    });
});

