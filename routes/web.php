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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('logs');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/dashboard', function () {
    $students = App\Student::all();
    return view('dashboard', compact('students'));
});*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('students','DashboardController@getStudents')->name('get.students');
    Route::get('home','DashboardController@index')->name('dashboard');
});


Route::get('/pdf',
    'StudentController@pdf')
    ->name('student.pdf');
Route::get('/xls',
    'StudentController@excel')
    ->name('xls');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
