<?php
Route::group([
    'middleware' => ['web', 'auth'],
    'prefix' => 'companies',
    'namespace' => 'App\Modules\Company\Controllers'
], function () {
    Route::get('/', 'CompanyController@index')->name('company');
    Route::get('/create', 'CompanyController@create')->name('company.create');
    Route::post('/store', 'CompanyController@store')->name('company.store');
    Route::get('/edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::post('/update/{id}', 'CompanyController@update')->name('company.update');
    Route::delete('/delete/{id}', 'CompanyController@delete')->name('company.delete');
});
