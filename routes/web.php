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
//AUTH
Route::post('/auth/login','AuthController@login');
Route::get('/login', 'AuthController@index')->middleware('IsLoggedIn');
Route::post('/logout', 'AuthController@logout');

Route::get('/userdata', function () {
    return session()->get('userdata');
});
Route::get('/dashboard', function(){
    $page='Dashboard';
    return view('dashboard.index',compact('page'));
});
Route::group(['middleware' => ['AuthCheck']], function () {

    
    //TRANSACTION
    Route::get('/transaction', 'TransactionController@index');
    Route::get('/transaction/confirmed', 'TransactionController@confirmed');
    Route::get('/transaction/paid', 'TransactionController@paid');
    Route::get('/transaction/history', 'TransactionController@history');
    Route::put('/transaction/newoffer', 'TransactionController@newoffer');
    Route::put('/transaction/payment', 'TransactionController@payment');
    Route::get('transaction/detail/{id}','TransactionController@detail');
    //END TRANSACTION

    //ASSET 
    Route::get('/asset', 'AssetController@create');
    Route::get('/', 'AssetController@all');
    Route::post('/asset/store', 'AssetController@store');
    Route::put('/asset/changestatus','AssetCOntroller@changestatus');
    Route::delete('/asset/delete','AssetCOntroller@delete');
    Route::put('/asset/update', 'AssetController@update');
    Route::post('/asset/addservice', 'AssetController@addservice');
    Route::get('/asset/active', 'AssetController@active');
    Route::get('/asset/inactive', 'AssetController@inactive');
    Route::get('/asset/baselist', 'AssetController@baselist');
    //Route untuk ketika klik row dapet data aircraft
    Route::get('/asset/detail/{id}', 'AssetController@detail');
    Route::get('/asset/edit/{id}', 'AssetController@edit');
    Route::get('/asset/deleteservice/{id}', 'AssetController@deleteservice');
    //END ASSET
    //USER
    Route::get('/user', 'UserController@index');
    Route::put('/user', 'UserController@update');
    Route::put('/user/changepassword', 'UserController@updatepassword');
    Route::get('/user/edit', 'UserController@edit');
    Route::get('/user/changepassword', 'UserController@changepassword');
    //END USER
  });




//SCHEDULE
Route::get('/schedule', function () {
    return view('schedule.index');
});


