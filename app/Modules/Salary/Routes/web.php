<?php
Route::group([
    'middleware' => ['web', 'auth'],
    'prefix' => 'salaries',
    'namespace' => 'App\Modules\Salary\Controllers'
], function () {
    Route::get('/', 'SalaryController@index')->name('salary');
    Route::get('/create', 'SalaryController@create')->name('salary.create');
    Route::post('/store', 'SalaryController@store')->name('salary.store');
    Route::get('/edit/{id}', 'SalaryController@edit')->name('salary.edit');
    Route::post('/update/{id}', 'SalaryController@update')->name('salary.update');
    Route::delete('/delete/{id}', 'SalaryController@delete')->name('salary.delete');
});
