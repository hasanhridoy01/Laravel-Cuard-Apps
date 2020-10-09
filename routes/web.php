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


//Student Page Reload
// Route::get('student', 'StudentController@AddNewStudentForm');
// Route::post('student-add', 'StudentController@InsertNewStudent');
// Route::get('student-all', 'StudentController@ViewAllStudent');
// Route::get('student-show/{id}', 'StudentController@ShowSingleStudent');
// Route::get('student-edit/{id}', 'StudentController@EditSingleStudent');
// Route::get('student-delete/{id}', 'StudentController@DeleteSingleStudent');
// Route::post('student-update/{id}', 'StudentController@UpdateSingleStudent');

//Staff Page Manage
Route::resource('staff', 'StaffController');
