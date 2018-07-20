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
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/reportes/saidi_por_causa', 'saidi_por_causa@init');
Route::get('reportes/confiabilidad_mensual','ConfiabilidadController@init');
Route::get('reportes/lmx','ramales_por_causa@init');
Route::get('reportes/gia','ramales_por_causa@GIA');
Route::get('reportes/tgd','ramales_por_causa@TGD');
Route::get('reportes/juy','ramales_por_causa@JUY');
Route::get('reportes/vfd','ramales_por_causa@VFD');
Route::get('reportes/rdb','ramales_por_causa@RDB');
Route::get('reportes/tgu','ramales_por_causa@TGU');
Route::get('reportes/txn','ramales_por_causa@TXN');
Route::get('reportes/txs','ramales_por_causa@TXS');
Route::get('reportes/ocz','ramales_por_causa@OCZ');
Route::get('reportes/ipd','ramales_por_causa@IPD');
Route::get('reportes/lgz','ramales_por_causa@LGZ');
Route::get('reportes/cit','ramales_por_causa@CIT');
Route::get('reportes/maa','ramales_por_causa@MAA');
Route::get('reportes/cop','ramales_por_causa@COP');
Route::get('reportes/mpe','ramales_por_causa@MPE');
Route::get('reportes/ped','ramales_por_causa@PED');
Route::get('reportes/smj','ramales_por_causa@SMJ');
Route::get('reportes/aaa','ramales_por_causa@AAA');
Route::get('reportes/soy','ramales_por_causa@SOY');

Route::get('reportes/saidi_meta','meta_vs_real@saidi_meta');
Route::get('reportes/saifi_meta','meta_vs_real@saifi_meta');
Route::get('reportes/caidi_meta','meta_vs_real@caidi_meta');
Route::get('reportes/ni_meta','meta_vs_real@ni_meta');
Route::get('reportes/upa_meta','meta_vs_real@upa_meta');
// Route::get('/Principal', function () {
//     return view('Principal');});
//
// Route::get('/saifimeta','saifimetaController@METASAIFI');
