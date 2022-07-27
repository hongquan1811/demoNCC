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

Route::get('admin/login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('admin/login/store', [\App\Http\Controllers\LoginController::class, 'store']);

Route::middleware(['auth'])->group(function()
{
    Route::prefix('admin')->group(function()
    {
        Route::resource('students', \App\Http\Controllers\StudentResourceController::class);
//        Route::prefix('student')->group(function ()
//        {
//            Route::get('list', [\App\Http\Controllers\StudentController::class, 'listStudent'])->name('list.Student');
//            Route::get('add', [\App\Http\Controllers\StudentController::class, 'addStudent'])->name('add.Student');
//            Route::post('add', [\App\Http\Controllers\StudentController::class, 'saveStudent'])->name('save.Student');
//            Route::get('edit/{id}', [\App\Http\Controllers\StudentController::class, 'editStudent'])->name('edit.Student');
//            Route::post('edit/{id}', [\App\Http\Controllers\StudentController::class, 'updateStudent'])->name('update.Student');
//            Route::get('delete/{id}', [\App\Http\Controllers\StudentController::class, 'deleteStudent'])->name('delete.Student');
//        });
        Route::resource('classrooms', \App\Http\Controllers\ClassroomController::class);
//        Route::prefix('classroom')->group(function ()
//        {
//            Route::get('list', [\App\Http\Controllers\StudentController::class, 'listClasses'])->name('list.Classes');
//            Route::get('add', [\App\Http\Controllers\StudentController::class, 'addClasses'])->name('add.Classes');
//            Route::post('add', [\App\Http\Controllers\StudentController::class, 'saveClasses'])->name('add.Classes');
//            Route::get('edit/{id}', [\App\Http\Controllers\StudentController::class, 'editClasses'])->name('edit.Classes');
//            Route::post('edit/{id}', [\App\Http\Controllers\StudentController::class, 'updateClasses'])->name('update.Classes');
//            Route::get('delete/{id}', [\App\Http\Controllers\StudentController::class, 'deleteClasses'])->name('delete.Classes');
//        });
          Route::resource('mentors', \App\Http\Controllers\MentorController::class);
//        Route::prefix('mentor')->group(function ()
//        {
//            Route::get('list', [\App\Http\Controllers\StudentController::class, 'listMentor'])->name('list.Mentor');
//            Route::get('add', [\App\Http\Controllers\StudentController::class, 'addMetor'])->name('add.Mentor');
//            Route::post('add', [\App\Http\Controllers\StudentController::class, 'saveMentor'])->name('save.Mentor');
//            Route::get('edit/{id}', [\App\Http\Controllers\StudentController::class, 'editMentor'])->name('edit.Mentor');
//            Route::post('edit/{id}', [\App\Http\Controllers\StudentController::class, 'updateMentor'])->name('update.Mentor');
//            Route::get('delete/{id}', [\App\Http\Controllers\StudentController::class, 'deleteMentor'])->name('delete.Mentor');
//        });
        Route::resource('schools', \App\Http\Controllers\SchoolController::class);
//        Route::prefix('school')->group(function ()
//        {
//            Route::get('list', [\App\Http\Controllers\StudentController::class, 'listSchool'])->name('list.School');
//            Route::get('add', [\App\Http\Controllers\StudentController::class, 'addSchool'])->name('add.School');
//            Route::post('add', [\App\Http\Controllers\StudentController::class, 'saveSchool'])->name('save.School');
//            Route::get('edit/{id}', [\App\Http\Controllers\StudentController::class, 'editSchool'])->name('edit.School');
//            Route::post('edit/{id}', [\App\Http\Controllers\StudentController::class, 'updateSchool'])->name('update.School');
//            Route::get('delete/{id}', [\App\Http\Controllers\StudentController::class, 'deleteSchool'])->name('delete.School');
//        });
    });
});
