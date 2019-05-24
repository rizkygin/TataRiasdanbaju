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
Route::get('/index', function () {
    return view('index');
});

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');

Route::resource('profilelapak','LapakController');
Route::post('profilelapak/{id}', 'LapakController@update')->name('lapak');


Route::resource('settingBaju','settingBajuController')->middleware('rolee');
Route::post('settingBaju/{id}', 'settingBajuController@store')->name('baju');

Route::resource('daftarLapak','daftarLapakController')->middleware('roleUser');
Route::post('daftarlapak/{id}', 'daftarLapakController@store')->name('daftarlapak');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('homelapak')->middleware('rolee');
Route::get('/userhome','HomeController@user')->name('home')->middleware('roleUser');

Route::resource('tatarias','tatarias_controller');
Route::post('tatarias/{id}','tatarias_controller@store')->name('bikin');


Route::resource('sewabaju','sewaController');
Route::post('sewabaju/{id}','sewaController@store')->name('bikinbaju');
