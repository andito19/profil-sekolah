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

Route::view('/', 'welcome');

Route::get('/index', function () {
    return view('index');
});

Route::group(['prefix'=>'kelas','as'=>'kelas.'],function(){
	Route::get('/','KelasController@index')->name('index');
	Route::get('/create','KelasController@create')->name('create');
	Route::post('save','KelasController@save')->name('save');
	Route::get('/edit/{id}','KelasController@edit')->name('edit');
	Route::post('/update','KelasController@update')->name('update');
	Route::get('/delete/{id}','KelasController@delete')->name('delete');
});


Route::group(['prefix'=>'prestasi','as'=>'prestasi.'],function(){
	Route::get('/','PrestasiController@index')->name('index');
	Route::get('/create','PrestasiController@create')->name('create');
	Route::post('save','PrestasiController@save')->name('save');
	Route::get('/edit/{id}','PrestasiController@edit')->name('edit');
	Route::post('/update','PrestasiController@update')->name('update');
	Route::get('/delete','PrestasiController@delete')->name('delete');
});


Route::resource('pengumuman', 'PengumumanController');



Route::group(['prefix'=>'staff','as'=>'staff.'],function(){
	Route::get('/','StaffController@index')->name('index');
	Route::get('/create','StaffController@create')->name('create');
	Route::post('save','StaffController@save')->name('save');
	Route::get('/edit/{id}','StaffController@edit')->name('edit');
	Route::post('/update','StaffController@update')->name('update');
	Route::get('/delete/{id}','StaffController@delete')->name('delete');
});

Route::group(['prefix'=>'acara','as'=>'acara.'],function(){
	Route::get('/','AcaraController@index')->name('index');
	Route::get('/create','AcaraController@create')->name('create');
	Route::post('save','AcaraController@save')->name('save');
	Route::get('/edit/{id}','AcaraController@edit')->name('edit');
	Route::post('/acara/edit/','AcaraController@editSave')->name('editsave');
	Route::post('/update','AcaraController@update')->name('update');
	Route::get('/delete','AcaraController@delete')->name('delete');
	Route::post('/acara/delete','AcaraController@deleteAcara')->name('deleted');	
});


Route::resource('guru', 'GuruController');


Route::group(['prefix'=>'siswa','as'=>'siswa.'],function(){
	Route::get('/','SiswaController@index')->name('index');
	Route::get('/create','SiswaController@create')->name('create');
	Route::post('save','SiswaController@save')->name('save');
	Route::get('/edit/{id}','SiswaController@edit')->name('edit');
	Route::post('/update','SiswaController@update')->name('update');
	Route::get('/delete','SiswaController@delete')->name('delete');	
});

Route::group(['prefix'=>'acara','as'=>'acara.'],function(){
	Route::get('/','AcaraController@index')->name('index');
	Route::get('/create','AcaraController@create')->name('create');
	Route::post('save','AcaraController@save')->name('save');
	Route::get('/edit/{id}','AcaraController@edit')->name('edit');
	Route::post('/acara/edit/','AcaraController@editSave')->name('editsave');
	Route::post('/update','AcaraController@update')->name('update');
	Route::get('/delete','AcaraController@delete')->name('delete');
	Route::get('/delete/{id}','SiswaController@delete')->name('delete');	
});
