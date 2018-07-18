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
Route::get('/inicio','inicio@init');

Auth::routes();

Route::get('/home', 'inicio@init')->name('home');



Route::get('/lmx','NewController@LMX');

Route::get('/gia','NewController@GIA');

Route::get('/tgd','NewController@TGD');

Route::get('/juy','NewController@JUY');

Route::get('/vfd','NewController@VFD');

Route::get('/rdb','NewController@RDB');

Route::get('/tgu','NewController@TGU');

Route::get('/txn','NewController@TXN');

Route::get('/txs','NewController@TXS');

Route::get('/ocz','NewController@OCZ');

Route::get('/ipd','NewController@IPD');

Route::get('/lgz','NewController@LGZ');

Route::get('/cit','NewController@CIT');	

Route::get('/maa','NewController@MAA');

Route::get('/cop','NewController@COP');

Route::get('/mpe','NewController@MPE');

Route::get('/ped','NewController@PED');

Route::get('/smj','NewController@SMJ');

Route::get('/aaa','NewController@AAA');

Route::get('/soy','NewController@SOY');

Route::get('/ang','NewController@ANG');


Route::get('/confi','ConfiabilidadController@CONFI');


Route::get('/mantto','OtherController@MANTTO');


Route::get('/caidi','CaidiController@CAIDI');

Route::get('/Principal', function () {
    return view('Principal');});

Route::get('/saifimeta','saifimetaController@METASAIFI');
