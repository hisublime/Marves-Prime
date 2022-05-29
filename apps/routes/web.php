<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProgramIsuController;
use App\Http\Controllers\RenaksiController;
use App\Http\Controllers\TurenController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ArahanMenteriController;
use App\Http\Controllers\RakorController;
use App\Http\Controllers\xController;


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
Route::get('/arahan-menteri', function(){
    return view('eselon1.show_all_arahan_menteri');
});

//autentikasi
Route::get('/','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('register', 'App\http\Controllers\AuthController@showFormRegister')->name('register');
Route::post('register', 'App\http\Controllers\AuthController@register');

//Role Administration
Route::group(['middleware' => ['auth','checkRole:administration']],function(){
    Route::get('/dashboard/admin', 'App\Http\Controllers\DashAdminController@index');

    //Pengguna
    Route::get('/pengguna','App\Http\Controllers\PenggunaController@index');
    Route::post('/pengguna/create','App\Http\Controllers\PenggunaController@create');
    Route::get('/pengguna/{id}/edit','App\Http\Controllers\PenggunaController@edit');
    Route::post('/pengguna/{id}/update','App\Http\Controllers\PenggunaController@update');
    Route::get('/pengguna/{id}/delete','App\Http\Controllers\PenggunaController@delete');
    Route::get('/pengguna/{id}/profile','App\Http\Controllers\PenggunaController@profile');

    //Aktivitas
    Route::get('/aktivitas', 'App\Http\Controllers\AktivitasController@index');
    Route::get('/aktivitas/exportExcel','App\Http\Controllers\AktivitasController@exportExcel');
    Route::get('/aktivitas/exportPdf','App\Http\Controllers\AktivitasController@exportPdf');
    Route::get('/aktivitas/{id}/delete','App\Http\Controllers\AktivitasController@delete');
});

//Role Eselon 1
Route::group(['middleware' => ['auth','checkRole:eseloni,Deputi 1,Deputi 2,Deputi 3,Deputi 4,Deputi 5,Deputi 6']],function(){
    Route::get('/dashboard','App\Http\Controllers\DashDeputi1Controller@index');
    //program
    Route::get('/program','App\Http\Controllers\ProgramController@index');
    Route::post('/program/create','App\Http\Controllers\ProgramController@create');
    Route::get('/program/{id}/edit','App\Http\Controllers\ProgramController@edit');
    Route::post('/program/{id}/update','App\Http\Controllers\ProgramController@update');
    Route::get('/program/{id}/delete','App\Http\Controllers\ProgramController@delete');

    //arahan menteri
    Route::get('/showArahanMenteri', 'App\Http\Controllers\ArahanMenteriController@index');
    Route::get('/showArahanMenteri/create/', 'App\Http\Controllers\ArahanMenteriController@create');
    Route::get('/detail-program-isu-pemimpin', 'App\Http\Controllers\PimpinanController@index');

    //rencana aksi
    //Route::get('/detail-program-isu/{id_proker}', 'App\Http\Controllers\RenaksiController@program');
    Route::post('/detail-program-isu/store', 'App\Http\Controllers\RenaksiController@store');
    Route::get('/detail-program-isu/create', 'App\Http\Controllers\RenaksiController@create');
    
    // Program-isu
    Route::get('/popup-program', [ProgramIsuController::class, 'index']);
    Route::post('/popup-program/create', [ProgramController::class, 'create']);
    Route::get('/popup-program/edit/{id}', [ProgramIsuController::class, 'edit']);
    Route::post('/popup-program/update/{id}', [ProgramIsuController::class, 'update']);

    // Renaksi
    Route::get('/popup-renaksi/{id_isu}', [RenaksiController::class, 'index']);
    Route::post('/popup-renaksi/create', [RenaksiController::class, 'create']);
    Route::get('/popup-renaksi/edit/{id}', [RenaksiController::class, 'edit']);
    Route::post('/popup-renaksi/update/{id}', [RenaksiController::class, 'update']);

    // Turen
    Route::get ('/popup-turen/{id_renaksi}', [TurenController::class, 'index']);
    Route::post('/popup-turen/create', [TurenController::class, 'create']);
    Route::get ('/popup-turen/edit/{id}', [TurenController::class, 'edit']);
    Route::post('/popup-turen/update/{id}', [TurenController::class, 'update']);

    // Kegiatan
    Route::get('/popup-kegiatan/{id_renaksi}', [KegiatanController::class, 'index']);
    Route::post('/popup-kegiatan/create', [KegiatanController::class, 'create']);
    Route::get('/popup-kegiatan/edit/{id}', [KegiatanController::class, 'edit']);
    Route::post('/popup-kegiatan/update/{id}', [KegiatanController::class, 'update']);
    Route::get('/popup-kegiatan/delete/{id}', [KegiatanController::class, 'delete']);
    Route::get('/detail-kegiatan/{id}', [KegiatanController::class, 'detail']);

     //Rakor-Paparan
    Route::get('/rakor/{id_keg}', [RakorController::class, 'index']);
    Route::post('/rakor/create', [RakorController::class, 'create']);
    Route::get('/rakor/detail/{id_rakor}', [RakorController::class, 'detail']);
    Route::get('/rakor/file/upload/{id_rakor}', [RakorController::class, 'upload']);
    Route::post('/rakor/file/store', [RakorController::class, 'store']);
    Route::get('/rakor/edit/{id_rakor}', [RakorController::class, 'edit']);
    Route::get('/rakor/file/delete/{id_file}', [RakorController::class, 'delete']);
    Route::get('/rakor/file/download/{id_file}', [RakorController::class, 'download']);
    Route::get('/notifikasi-eselon', [RakorController::class, 'notif']);
});

//Role Persidangan
Route::group(['middleware' => ['auth','checkRole:persidangan']],function(){
    Route::get('/dashboard2','App\Http\Controllers\DashDeputi2Controller@index');
    //Persidangan
    Route::get('/persidangan', 'App\Http\Controllers\PersidanganController@index');
    Route::get('/persidangan/request-persidangan', 'App\Http\Controllers\PersidanganController@index_request');
    Route::get('/persidangan/ditolak-persidangan', 'App\Http\Controllers\PersidanganController@index_ditolak');
    Route::get('/persidangan/approve/{id}', 'App\Http\Controllers\PersidanganController@approve');
    Route::get('/persidangan/reject/{id}', 'App\Http\Controllers\PersidanganController@reject');
    Route::get('/persidangan/cari', 'App\Http\Controllers\PersidanganController@search');
    //Route::get('/persidangan/{id_rakor}', 'App\Http\Controllers\PersidanganController@index');
    Route::get('/persidangan/tambah-draft-risalah/{id}', 'App\Http\Controllers\PersidanganController@input');
    Route::post('/persidangan/tambah-draft-risalah/{id}/', 'App\Http\Controllers\PersidanganController@store');

    // Notifikasi
    Route::get('/notifikasi', 'App\Http\Controllers\NotifikasiController@index');
    Route::get('/notifikasi/rapat-koordinasi', 'App\Http\Controllers\NotifikasiController@rakor');
    Route::get('/notifikasi/draft-risalah', 'App\Http\Controllers\NotifikasiController@draft');
    Route::get('/notifikasi/detail-draft-risalah/{id}', 'App\Http\Controllers\NotifikasiController@detail');
    Route::get('/notifikasi/detail-draft-risalah', 'App\Http\Controllers\NotifikasiController@detail');
    Route::post('/notifikasi/{id}', 'App\Http\Controllers\NotifikasiController@update');
    Route::get('/notifikasi/edit-notifikasi/{id}', 'App\Http\Controllers\NotifikasiController@edit');
    //Route::get('/notifikasi/draft-risalah', 'App\Http\Controllers\DraftRisalahController@catatan');
});

Route::group(['middleware' => ['auth','checkRole:persidangan,eseloni']],function(){
    // Notifikasi
    Route::get('/notifikasi', 'App\Http\Controllers\NotifikasiController@index');
    Route::get('/notifikasi/rapat-koordinasi', 'App\Http\Controllers\NotifikasiController@rakor');
    Route::get('/notifikasi/draft-risalah', 'App\Http\Controllers\NotifikasiController@draft');
    Route::get('/notifikasi/detail-draft-risalah/{id}', 'App\Http\Controllers\NotifikasiController@detail');
    Route::get('/notifikasi/detail-draft-risalah', 'App\Http\Controllers\NotifikasiController@detail');
    Route::post('/notifikasi/{id}', 'App\Http\Controllers\NotifikasiController@update');
    Route::get('/notifikasi/edit-notifikasi/{id}', 'App\Http\Controllers\NotifikasiController@edit');
    //Route::get('/notifikasi/draft-risalah', 'App\Http\Controllers\DraftRisalahController@catatan');

});
Route::group(['middleware' => ['auth','checkRole:pemimpin,eseloni,menkomarves']],function(){
    Route::get('/detail-program-isu/{id}', 'App\Http\Controllers\RenaksiController@indexdetail');
});

Route::group(['middleware' => ['auth','checkRole:pemimpin,menkomarves']],function(){
    Route::get('/menko/deputi1', 'App\Http\Controllers\DashDeputi1Controller@dep1');
    Route::get('/menko/deputi2', 'App\Http\Controllers\DashDeputi2Controller@dep2');
    Route::get('/menko/deputi3', 'App\Http\Controllers\DashDeputi3Controller@dep3');
    Route::get('/menko/deputi4', 'App\Http\Controllers\DashDeputi4Controller@dep4');
    Route::get('/menko/deputi5', 'App\Http\Controllers\DashDeputi5Controller@dep5');
    Route::get('/menko/deputi6', 'App\Http\Controllers\DashDeputi6Controller@dep6');
    Route::get('/menko/inspektorat', 'App\Http\Controllers\DashInspektoratController@index');
    Route::get('/menko/sekretariat-kemenko', 'App\Http\Controllers\DashSekretariatController@index');
    
    Route::get('/pimpinan/deputi1program','App\Http\Controllers\PimpinanController@deputi1program');
    Route::get('/pimpinan/deputi2program','App\Http\Controllers\PimpinanController@deputi2program');
    Route::get('/pimpinan/deputi3program','App\Http\Controllers\PimpinanController@deputi3program');
    Route::get('/pimpinan/deputi4program','App\Http\Controllers\PimpinanController@deputi4program');
    Route::get('/pimpinan/deputi5program','App\Http\Controllers\PimpinanController@deputi5program');
    Route::get('/pimpinan/deputi6program','App\Http\Controllers\PimpinanController@deputi6program');
    Route::get('/pimpinan/sekretariatprogram','App\Http\Controllers\PimpinanController@sekretariatprogram');
});

//Role Menko Marves
Route::group(['middleware' => ['auth','checkRole:menkomarves']],function(){
    Route::get('/menko/home', 'App\Http\Controllers\MenkoController@index');
    // Menko Marves
    Route::get('/menko/program-kerja', 'App\Http\Controllers\MenkoController@programisu');
    Route::get('/menko/program-isu','App\Http\Controllers\ProgramController@programmenko');
    Route::get('/menko/arahan-menteri', 'App\Http\Controllers\ArahanMenteriController@arahanmenko');
    Route::get('/deputi1program','App\Http\Controllers\MenkoController@deputi1program');
    Route::get('/deputi2program','App\Http\Controllers\MenkoController@deputi2program');
    Route::get('/deputi3program','App\Http\Controllers\MenkoController@deputi3program');
    Route::get('/deputi4program','App\Http\Controllers\MenkoController@deputi4program');
    Route::get('/deputi5program','App\Http\Controllers\MenkoController@deputi5program');
    Route::get('/deputi6program','App\Http\Controllers\MenkoController@deputi6program');
    Route::get('/sekretariatprogram','App\Http\Controllers\MenkoController@sekretariatprogram');

});

Route::group(['middleware' => ['auth','checkRole:pemimpin']],function(){
    Route::get('/home', 'App\Http\Controllers\PimpinanController@index');
    Route::get('/program-kerja', 'App\Http\Controllers\MenkoController@programisu');
    Route::get('/deputi1', 'App\Http\Controllers\DashDeputi1Controller@dep1');
    Route::get('/deputi2', 'App\Http\Controllers\DashDeputi2Controller@dep2');
    Route::get('/deputi3', 'App\Http\Controllers\DashDeputi3Controller@dep3');
    Route::get('/deputi4', 'App\Http\Controllers\DashDeputi4Controller@dep4');
    Route::get('/deputi5', 'App\Http\Controllers\DashDeputi5Controller@dep5');
    Route::get('/deputi6', 'App\Http\Controllers\DashDeputi6Controller@dep6');
    Route::get('/inspektorat', 'App\Http\Controllers\DashInspektoratController@index');
    Route::get('/sekretariat-kemenko', 'App\Http\Controllers\DashSekretariatController@index');
    Route::get('/program-isu','App\Http\Controllers\ProgramController@programmenko');
    Route::get('/arahan-menteri', 'App\Http\Controllers\ArahanMenteriController@arahanmenko');
});
// Route::group(['middleware' => ['auth','checkRole:eseloni,persidangan,menkomarves,pemimpin,sekretariat,inspektorat,Deputi 1,Deputi 2,Deputi 3,Deputi 4,Deputi 5,Deputi 6']],function(){
// 
// Route::get('/dashboard/admin', 'App\Http\Controllers\DashAdminController@index');
// Route::get('/dashboard2','App\Http\Controllers\DashDeputi2Controller@index');
// Route::get('/dashboard3','App\Http\Controllers\DashDeputi3Controller@index');
// Route::get('/dashboard4','App\Http\Controllers\DashDeputi4Controller@index');
// Route::get('/dashboard5','App\Http\Controllers\DashDeputi5Controller@index');
// Route::get('/dashboard6','App\Http\Controllers\DashDeputi6Controller@index');
// Route::get('/sekretariat-kemenko/home', 'App\Http\Controllers\DashSekretariatController@index');
// Route::get('/inspektorat/home', 'App\Http\Controllers\DashInspektoratController@index');

// //pimpinan
// Route::get('/detail-program-isu-pimpinan', 'App\Http\Controllers\PimpinanController@index');

// //detail program isu
// //Route::get('/detail-program-isu/{id}', [RenaksiController::class, 'indexdetail']);

// //rencana aksi
// //Route::get('/detail-program-isu', 'App\Http\Controllers\RencanaaksiController@index');
// //Route::post('/detail-program-isu/store', 'App\Http\Controllers\RencanaaksiController@store');
// //Route::get('/detail-program-isu/create', 'App\Http\Controllers\RencanaaksiController@create');

// Route::get('/detail-program-isu-pimpinan', 'App\Http\Controllers\PimpinanController@index');

// // Persidangan
// Route::get('/persidangan/daftar-persidangan', 'App\Http\Controllers\PersidanganController@index');
// Route::get('/persidangan/tambah-jadwal-persidangan', 'App\Http\Controllers\PersidanganController@create');



// // Arahan Menteri
// Route::get('/showArahanMenteri', [ArahanMenteriController::class, 'index']);
// Route::get('/showArahanMenteri/create/', [ArahanMenteriController::class, 'create']);






