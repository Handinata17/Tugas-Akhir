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
Route::get('/','Pengguna\LandingController@index');
// Route::get('/{prodi}','Pengguna\LandingController@prodi');
Route::get('/recruitment/{id}','Pengguna\LandingController@show');
Route::post('/pendaftaran/create' ,'Pengguna\PendaftaranController@store')->name('store.pendaftaran');
Route::get('/proker/{id}','Pengguna\LandingController@show');
Route::get('konfirmasi/email/{token}', 'Pengguna\PendaftaranController@confirmEmail');




Route::get('/create', function () {
      return view('pages.adminbem.dana.create');
})->name('create');

// Route::get('landing', function(){
//     return view('pages.home.landing');
// });



Route::group(['prefix' => 'pengguna'], function(){

    Route::get('/password/reset', 'Pengguna\ForgotPasswordController@showLinkRequestForm')->name('pengguna.password.request');
    Route::post('/password/email', 'Pengguna\ForgotPasswordController@sendResetLinkEmail')->name('pengguna.password.email');
    Route::get('/password/reset/email', 'Pengguna\ResetPasswordController@showResetForm')->name('pengguna.password.reset');
    Route::post('/password/reset', 'Pengguna\ResetPasswordController@reset')->name('pengguna.password.reset.submit');



    Route::get('/beranda','Pengguna\BerandaController@index')->name('pengguna.beranda');
    Route::get('/event','Pengguna\EventController@index')->name('event');
    Route::get('/event/report','Pengguna\EventController@print')->name('print.event');
    Route::get('/event/create','Pengguna\EventController@create')->name('create.event');
    Route::post('/event/create' ,'Pengguna\EventController@store')->name('store.event');
    Route::get('/event/{id}/edit','Pengguna\EventController@edit')->name('edit.event');
    Route::patch('/event/{id}/edit','Pengguna\EventController@update')->name('update.event');
    Route::get('/event/{id}/revisi','Pengguna\EventController@revisi')->name('revisi.event');
    Route::put('/event/{id}/revisi','Pengguna\EventController@revisiSubmit')->name('revisi.submit.event');
    Route::get('reset','Pengguna\EventController@reset')->name('cancel.event');

    Route::get('/event/{id}/acc','Pengguna\EventController@acc')->name('acc.event');
    Route::get('/event/{id}/acc_wadir_3','Pengguna\EventController@acc_wadir_3')->name('acc_wadir_3.event');
    Route::get('/event/{id}', 'Pengguna\EventController@destroy')->name('destroy.event');

    Route::get('/eventlainnya','Pengguna\EventLainnyaController@index')->name('eventlainnya');
    Route::get('/eventlainnya/create','Pengguna\EventLainnyaController@create')->name('create.eventlainnya');
    Route::post('/eventlainnya/create' ,'Pengguna\EventLainnyaController@store')->name('store.eventlainnya');
    Route::get('/eventlainnya/{id}/edit','Pengguna\EventLainnyaController@edit')->name('edit.eventlainnya');
    Route::get('/eventlainnya/{id}/revisi','Pengguna\EventLainnyaController@revisi')->name('revisi.eventlainnya');
    Route::get('/eventlainnya/{id}/acc_bpm','Pengguna\EventLainnyaController@acc_bpm')->name('acc_bpm.eventlainnya');
    Route::get('/eventlainnya/{id}/acc_bem','Pengguna\EventLainnyaController@acc_bem')->name('acc_bem.eventlainnya');
    Route::get('/eventlainnya/{id}/acc_kaprodi','Pengguna\EventLainnyaController@acc_kaprodi')->name('acc_kaprodi.eventlainnya');
    Route::get('/eventlainnya/{id}/acc_wadir_3','Pengguna\EventLainnyaController@acc_wadir_3')->name('acc_wadir_3.eventlainnya');
    Route::get('/eventlainnya/{id}', 'Pengguna\EventLainnyaController@destroy')->name('destroy.eventlainnya');
    Route::get('reset','Pengguna\EventLainnyaController@reset')->name('cancel.eventlainnya');

    Route::get('/revisi','Pengguna\RevisiController@index')->name('pengguna.revisi.event');
    Route::get('/revisi/{id}','Pengguna\RevisiController@show')->name('pengguna.revisi.event.show');
    // Route::get('/revisi/lainnya','Pengguna\RevisiController@index')->name('pengguna.revisi.eventlainnya');
    // Route::get('/revisi{id}', 'Pengguna\RevisiController@destroy')->name('destroy.revisi');
    Route::put('/proker/{id}/update','Pengguna\ProkerController@update')->name('update.proker');
    Route::get('reset','Pengguna\RevisiController@reset')->name('cancel.event');

    Route::get('/proker','Pengguna\ProkerController@index')->name('proker');
    Route::get('/proker/create','Pengguna\ProkerController@create')->name('create.proker');
    Route::post('/proker/create' ,'Pengguna\ProkerController@store')->name('store.proker');
    Route::get('/proker/{id}/edit','Pengguna\ProkerController@edit')->name('edit.proker');
    Route::put('/proker/{id}/update','Pengguna\ProkerController@update')->name('update.proker');
    Route::get('reset','Pengguna\ProkerController@reset')->name('cancel.proker');
    Route::get('/proker/{id}', 'Pengguna\ProkerController@destroy')->name('destroy.proker');
    Route::get('/proker/{id}/show', 'Pengguna\ProkerController@show')->name('show.proker');

    Route::get('/recruitment','Pengguna\RecruitmentController@index')->name('recruitment');
    Route::get('/recruitment/create','Pengguna\RecruitmentController@create')->name('create.recruitment');
    Route::post('/recruitment/create' ,'Pengguna\RecruitmentController@store')->name('store.recruitment');
    Route::get('/recruitment/{id}/edit','Pengguna\RecruitmentController@edit')->name('edit.recruitment');
    Route::put('/recruitment/{id}/update','Pengguna\RecruitmentController@update')->name('update.recruitment');
    Route::get('/recruitment/{id}', 'Pengguna\RecruitmentController@destroy')->name('destroy.recruitment');
    Route::get('/recruitment/{id}/show', 'Pengguna\RecruitmentController@show')->name('show.recruitment');
    Route::put('/recruitment/konfirmasi/diterima/{id}','Pengguna\PendaftaranController@konfirmasiTerima')->name('konfirmasi.diterima');
    Route::put('/recruitment/konfirmasi/ditolak/{id}','Pengguna\PendaftaranController@konfirmasiTolak')->name('konfirmasi.ditolak');
    Route::get('reset','Pengguna\RecruitmentController@reset')->name('cancel.recruitment');

    Route::get('/pendaftaran','Pengguna\PendaftaranController@index')->name('pendaftaran');
    Route::post('/pendaftaran/create','Pengguna\PendaftaranController@create')->name('create.pendaftaran');
    Route::get('/pendaftaran/{id}/edit','Pengguna\PendaftaranController@edit')->name('edit.pendaftaran');
    Route::put('/pendafratan/{id}/update','Pengguna\PendaftaranController@update')->name('update.pendaftaran');
    Route::get('/pendaftaran/{id}', 'Pengguna\PendaftaranController@destroy')->name('destroy.pendaftaran');
    Route::get('/pendaftaran/{id}/show', 'Pengguna\PendaftaranController@show')->name('show.pendaftaran');
    Route::get('reset','Pengguna\PendaftaranController@reset')->name('cancel.pendaftaran');
});

Route::get('/formoprecbpm', function () {
    return view('pages.adminbpm.recruitment.formoprecbpm');
});

Route::get('/dataoprecbpm', function () {
    return view('pages.adminbpm.recruitment.dataoprecbpm');
});
Route::get('/dataopreclolosbpm', function () {
    return view('pages.adminbpm.recruitment.dataopreclolosbpm');
});

Route::get('/create', function () {
    return view('pages.adminbpm.dana.create');
})->name('create');;



Route::get('/adminhimaprodi', function () {
    return view('pages.adminhimaprodi.dashboard');
});
Route::get('/create', function () {
    return view('pages.adminhimaprodi.eventhima.create');
})->name('create');
Route::get('/edit', function () {
    return view('pages.adminhimaprodi.eventhima.edit');
})->name('edit');
Route::get('/index', function () {
    return view('pages.adminhimaprodi.eventhima.index');
})->name('index');
Route::get('/create', function () {
    return view('pages.adminhimaprodi.dana.create');
})->name('create');;




Route::get('/adminkaprodi', function () {
    return view('pages.adminkaprodi.dashboard');
});
Route::get('/dataeventkaprodi', function () {
    return view('pages.adminkaprodi.event.dataeventkaprodi');
});
Route::get('/dataopreckaprodi', function () {
    return view('pages.adminkaprodi.recruitment.dataopreckaprodi');
});



Route::get('/adminukm', function () {
    return view('pages.adminukm.dashboard');
});
Route::get('/create', function () {
    return view('pages.adminukm.eventukm.create');
});
Route::get('/edit', function () {
    return view('pages.adminukm.eventukm.edit');
});
Route::get('/index', function () {
    return view('pages.adminukm.eventukm.index');
});

Route::get('/create', function () {
    return view('pages.adminukm.dana.create');
})->name('create');;




Route::get('/adminwadir3', function () {
    return view('pages.adminwadir3.dashboard');
});
Route::get('/dataeventwadir', function () {
    return view('pages.adminwadir3.event.dataeventwadir');
});
Route::get('/dataoprecwadir', function () {
    return view('pages.adminwadir3.recruitment.dataoprecwadir');
});



// Route::get('/superadmin', function () {
//     return view('pages.superadmin.dashboard');
// })->middleware('auth:superadmin');
Route::get('/dataevent', function () {
    return view('pages.superadmin.event.dataevent');
});
Route::get('/formevent', function () {
    return view('pages.superadmin.event.formevent');
});


Route::get('/dataoprec', function () {
    return view('pages.superadmin.recruitment.dataoprec');
});
Route::get('/formoprec', function () {
    return view('pages.superadmin.recruitment.formoprec');
});

Route::group(['prefix' => 'pengguna'], function(){
    Route::get('/login','Pengguna\AuthPenggunaController@getLogin')->name('pengguna.login');
    Route::post('/login','Pengguna\AuthPenggunaController@login')->name('pengguna.login.submit');
    Route::get('/logout','Pengguna\AuthPenggunaController@logout')->name('pengguna.logout');
});

Route::group(['prefix' => 'superadmin'], function(){
    Route::get('/login','SuperAdmin\AuthController@getLogin')->name('superadmin.login');
    Route::post('/login','SuperAdmin\AuthController@login')->name('superadmin.login.submit');
    Route::get('reset','SuperAdmin\AuthController@reset')->name('superadmin.login.cancel');
    Route::get('/logout','SuperAdmin\AuthController@logout')->name('superadmin.logout');

    Route::get('/beranda','Pengguna\BerandaController@index')->name('superadmin.beranda');
    Route::get('/pengguna','SuperAdmin\PenggunaController@index')->name('pengguna');
    Route::get('/pengguna/create','SuperAdmin\PenggunaController@create')->name('create.pengguna');
    Route::post('/pengguna/create' ,'SuperAdmin\PenggunaController@store')->name('store.pengguna');
    Route::get('/pengguna/{id}/edit','SuperAdmin\PenggunaController@edit')->name('edit.pengguna');
    Route::put('/pengguna/{id}/update','SuperAdmin\PenggunaController@update')->name('update.pengguna');
    Route::get('/pengguna/{id}','SuperAdmin\PenggunaController@destroy')->name('destroy.pengguna');
    Route::get('reset','SuperAdmin\PenggunaController@reset')->name('superadmin.pengguna.cancel');

    // Route::get('/organisasi', 'SuperAdmin\OrganisasiController@index')->name('organisasi');
    // Route::post('/organisasi', 'SuperAdmin\OrganisasiController@store')->name('simpan.organisasi');
    // Route::put('/organisasi/{organisasi}', 'SuperAdmin\OrganisasiController@update')->name('update.organisasi');
});

Route::group(['prefix' => 'pengguna'], function(){
Route::get('/profil', 'Pengguna\ProfilController@index')->name('index.profil');
Route::patch('/profil/password','Pengguna\ProfilController@updatePassword')->name('pengguna.update.password');
Route::patch('/profil','Pengguna\ProfilController@update')->name('pengguna.update');

// Route::put('/profil/{id}/update','Pengguna\ProfilController@update')->name('update.profil');
});

Route::group(['prefix' => 'superadmin'], function(){
    // Route::get('/profil', 'SuperAdmin\ProfilController@index')->name('superadmin.index.profil');
    // Route::put('/profil/{id}/update','SuperAdmin\ProfilController@update')->name('superadmin.update.profil');
    });
