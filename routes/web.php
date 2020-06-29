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
    return view('pages.landing_page');
});

Auth::routes();

// Route::group(['prefix' => 'adminbem'], function(){
//     // Route::get('/adminbem', function () {
//     // return view('pages.adminbem.dashboard');
//     Route::get('/eventbem','AdminBem\EventBemController@index')->name('events');
//     Route::get('/eventbem/create','AdminBem\EventBemController@create')->name('create.events');
//     Route::post('/eventbem/create' ,'AdminBem\EventBemController@store')->name('store.events');
//     Route::get('/eventbem/{id}/edit','AdminBem\EventBemController@edit')->name('edit.events');
//     Route::put('/eventbem/{id}/update','AdminBem\EventBemController@update')->name('update.events');
//     Route::get('/eventbem/{id}', 'AdminBem\EventBemController@destroy')->name('destroy.events');

//     });

    Route::get('/create', function () {
        return view('pages.adminbem.dana.create');
    })->name('create');;




Route::group(['prefix' => 'pengguna'], function(){
    Route::get('/','Pengguna\BerandaController@index')->name('pengguna.beranda');
    Route::get('/event','Pengguna\EventController@index')->name('event');
    Route::get('/event/create','Pengguna\EventController@create')->name('create.event');
    Route::post('/event/create' ,'Pengguna\EventController@store')->name('store.event');
    Route::get('/event/{id}/edit','Pengguna\EventController@edit')->name('edit.event');
    Route::put('/event/{id}/update','Pengguna\EventController@update')->name('update.event');
    Route::get('/event/{id}', 'Pengguna\EventController@destroy')->name('destroy.event');
});

Route::group(['prefix' => 'pengguna'], function(){
    Route::get('/','Pengguna\BerandaController@index')->name('pengguna.beranda');
    Route::get('/eventlainnya','Pengguna\EventLainnyaController@index')->name('eventlainnya');
    Route::get('/eventlainnya/create','Pengguna\EventLainnyaController@create')->name('create.eventlainnya');
    Route::post('/eventlainnya/create' ,'Pengguna\EventLainnyaController@store')->name('store.eventlainnya');
    Route::get('/eventlainnya/{id}/edit','Pengguna\EventLainnyaController@edit')->name('edit.eventlainnya');
    Route::put('/eventlainnya/{id}/update','Pengguna\EventLainnyaController@update')->name('update.eventlainnya');
    Route::get('/eventlainnya/{id}', 'Pengguna\EventLainnyaController@destroy')->name('destroy.eventlainnya');
});

Route::group(['prefix' => 'pengguna'], function(){
    Route::get('/','Pengguna\BerandaController@index')->name('pengguna.beranda');
    Route::get('/proker','Pengguna\ProkerController@index')->name('proker');
    Route::get('/proker/create','Pengguna\ProkerController@create')->name('create.proker');
    Route::post('/proker/create' ,'Pengguna\ProkerController@store')->name('store.proker');
    Route::get('/proker/{id}/edit','Pengguna\ProkerController@edit')->name('edit.proker');
    Route::put('/proker/{id}/update','Pengguna\ProkerController@update')->name('update.proker');
    Route::get('/proker/{id}', 'Pengguna\ProkerController@destroy')->name('destroy.proker');
    Route::get('/proker/{id}/show', 'Pengguna\ProkerController@show')->name('show.proker');
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



Route::get('/superadmin', function () {
    return view('pages.superadmin.dashboard');
})->middleware('auth:superadmin');
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
    Route::get('/logout','SuperAdmin\AuthController@logout')->name('superadmin.logout');

    // Route::get('/login','SuperAdmin\AuthController@getLogin')->name('pengguna.login');
    // Route::post('/pengguna/login','SuperAdmin\AuthController@login')->name('pengguna.login.submit');
    // Route::get('/pengguna/logout','SuperAdmin\AuthController@logout')->name('pengguna.logout');

    Route::get('/pengguna','SuperAdmin\PenggunaController@index')->name('pengguna');
    Route::get('/pengguna/create','SuperAdmin\PenggunaController@create')->name('create.pengguna');
    Route::post('/pengguna/create' ,'SuperAdmin\PenggunaController@store')->name('store.pengguna');
    Route::get('/pengguna/{id}/edit','SuperAdmin\PenggunaController@edit')->name('edit.pengguna');
    Route::put('/pengguna/{id}/update','SuperAdmin\PenggunaController@update')->name('update.pengguna');
    Route::get('/pengguna/{id}','SuperAdmin\PenggunaController@destroy')->name('destroy.pengguna');

    Route::get('/organisasi', 'SuperAdmin\OrganisasiController@index')->name('organisasi');
    Route::post('/organisasi', 'SuperAdmin\OrganisasiController@store')->name('simpan.organisasi');
    Route::put('/organisasi/{organisasi}', 'SuperAdmin\OrganisasiController@update')->name('update.organisasi');
});
