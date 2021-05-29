<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::group(['middleware' => ['auth',]], function () {
    Route::get('/role', 'App\Http\Controllers\RoleController@index')->name('role');
    Route::get('/role/create', 'App\Http\Controllers\RoleController@create')->name('role.create');
    Route::post('/role/store', 'App\Http\Controllers\RoleController@store')->name('role.store');
    Route::get('/role/edit/{id}', 'App\Http\Controllers\RoleController@edit')->name('role.edit');
    Route::put('/role/update/{id}', 'App\Http\Controllers\RoleController@update')->name('role.update');
});


require __DIR__.'/auth.php';
