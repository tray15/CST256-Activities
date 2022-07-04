<?php
use App\Http\Controllers\WhatsMyNameController;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/login2', function () {
    return view('login2');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/dologin', 'LoginController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', 'TestController@test2');

Route::post('/whoami', 'WhatsMyNameController@index');

Route::get('/askme', function () {
    return view('whoami');
});