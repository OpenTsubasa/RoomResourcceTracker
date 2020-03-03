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

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/home', function() {
        return view('home');
        
        /*if (Auth::user()->can('edit_or_update')) {
            
        } else {
            
        }*/
    })->name('home');

    Route::resource('buildings', 'BuildingController');
    Route::resource('departments', 'DepartmentController');
    Route::resource('faculties', 'FacultyController');
    Route::resource('resources', 'ResourceController');
    Route::resource('resourcetypes', 'ResourcetypeController');
    Route::resource('rooms', 'RoomController');
    Route::resource('roomtypes', 'RoomtypeController');
    Route::resource('floorplans', 'FloorplanController');
    Route::resource('tours', 'TourController');
});

Route::prefix('public')->group(function () {
    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/buildings', 'PublicController@buildings');
    Route::get('/faculties', 'PublicController@faculties');
    Route::get('/departments', 'PublicController@departments');
    Route::get('/roomtypes', 'PublicController@roomtypes');
    Route::get('/rooms', 'PublicController@rooms');
    Route::get('/resourcetypes', 'PublicController@resourcetypes');
    Route::get('/resources', 'PublicController@resources');
    Route::get('/floorplans', 'PublicController@floorplans');
    Route::get('/tours', 'PublicController@tours');
});

