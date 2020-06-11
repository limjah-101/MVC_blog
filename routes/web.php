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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "HomePageController@index");
Route::get('/list', "ListingPageController@index");
Route::get('/details', "DetailsPageController@index");


Route::group(['prefix' => 'administrator', 'middleware'=>'auth'], function(){    
    Route::get("/", "Admin\DashboardController@index");

    //Category Routes
    Route::get("/category", "Admin\CategoryController@index");
    Route::get("/category/create", "Admin\CategoryController@create");
    Route::get("/category/edit", "Admin\CategoryController@edit");

    //Permission Routes
    Route::get("/permission", "Admin\PermissionController@index");
    Route::get("/permission/create", "Admin\PermissionController@create");
    Route::post("/permission/store", "Admin\PermissionController@store");
    Route::get("/permission/edit/{id}", [
        "uses" => "Admin\PermissionController@edit", 
        "as" => "permission-edit"
    ]);
    Route::put("/permission/edit/{id}", [
        "uses" => "Admin\PermissionController@update", 
        "as" => "permission-update"
    ]);
    Route::delete("/permission/delete/{id}", [
        "uses" => "Admin\PermissionController@destroy", 
        "as" => "permission-delete"
    ]);
    

    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
