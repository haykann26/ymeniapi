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
//    return view( 'ymeni.welcome' );
});


Auth::routes();

//Route::get( '/home', 'HomeController@index' )->name('home');

Route::get( 'cssgrid' , function () {

    return view('cssgrid');
} );


Route::get( '{any}', function ( $param ) {
    return $param;
})->where('any', '.*');
