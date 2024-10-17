<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Common\RoleController;
use App\Http\Controllers\Backend\Common\UserController;
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\DashboardController as StudentDashboardController;

/**
 * All web routes
 * @author Md. Amzad Hossain Jacky <amzadhossaina1922@gmail.com>
 */

/** Routes without middleware */

## login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::redirect('/', 'login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/** Routes with middleware */
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {

    ## Dashboard
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    ## Role
    Route::controller(RoleController::class)->group(function () {
        Route::get('/roles', 'index')->name('roles')->middleware(['permission:role-list']);
        Route::get('/roles/create', 'create')->name('roles.create')->middleware(['permission:role-create']);
        Route::post('/roles/create', 'store')->name('roles.store');
        Route::get('/roles/edit/{id}', 'edit')->name('roles.edit')->middleware(['permission:role-edit']);
        Route::post('/roles/update/{id}', 'update')->name('roles.update');
        Route::get('/roles/destroy/{id}', 'destroy')->name('roles.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::get('/users/create', 'create')->name('users.create');
        Route::get('/show', 'show')->name('show');
        Route::post('/users/store', 'store')->name('users.store');
        Route::put('/users/status/change/{id}', 'statusChange')->name('users.status.change');
        Route::get('/users/edit/{id}', 'edit')->name('users.edit');
        Route::post('/users/update', 'update')->name('users.update');
    });
});

Route::group(['as' => 'student.', 'prefix' => 'student', 'middleware' => ['auth', 'is_student']], function () {

    ## Dashboard
    Route::controller(StudentDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    ## Role
    Route::controller(RoleController::class)->group(function () {
        Route::get('/roles', 'index')->name('roles')->middleware(['permission:role-list']);
        Route::get('/roles/create', 'create')->name('roles.create')->middleware(['permission:role-create']);
        Route::post('/roles/create', 'store')->name('roles.store');
        Route::get('/roles/edit/{id}', 'edit')->name('roles.edit')->middleware(['permission:role-edit']);
        Route::post('/roles/update/{id}', 'update')->name('roles.update');
        Route::get('/roles/destroy/{id}', 'destroy')->name('roles.destroy');
    });
});