<?php
Route::group([
    'middleware' => ['web', 'auth'],
    'prefix' => 'employees',
    'namespace' => 'App\Modules\Employee\Controllers'
], function () {
    Route::get('/', 'EmployeeController@index')->name('employee');
    Route::get('/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/store', 'EmployeeController@store')->name('employee.store');
    Route::get('/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
    Route::post('/update/{id}', 'EmployeeController@update')->name('employee.update');
    Route::delete('/delete/{id}', 'EmployeeController@delete')->name('employee.delete');
});
