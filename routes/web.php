<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Common\RoleController;
use App\Http\Controllers\Backend\Common\UserController;
use App\Http\Controllers\Backend\Common\ProductCategoryTypeController;
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\DashboardController as AdvisorDashboardController;
use App\Http\Controllers\Backend\Admin\DashboardController as SupervisorDashboardController;

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

    ## Users
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users')->middleware(['permission:role-list']);
        Route::get('/users/create', 'create')->name('users.create');
        Route::get('/users/show', 'show')->name('users.show');
        Route::post('/users/store', 'store')->name('users.store');
        Route::put('/users/status/change/{id}', 'statusChange')->name('users.status.change');
        Route::get('/users/edit/{id}', 'edit')->name('users.edit');
        Route::post('/users/update', 'update')->name('users.update');
    });

    ## Product Category Type
    Route::controller(ProductCategoryTypeController::class)->group(function () {
        Route::get('/product/category/type', 'index')->name('product.category.type');
        Route::get('/product/category/type/create', 'create')->name('product.category.type.create');
        Route::post('/product/category/type/store', 'store')->name('product.category.type.store');
        Route::get('/product/category/type/show', 'show')->name('product.category.type.show');
        Route::put('/product/category/type/status/change/{id}', 'statusChange')->name('product.category.type.status.change');
        Route::get('/product/category/type/edit/{id}', 'edit')->name('product.category.type.edit');
        Route::post('/product/category/type/update', 'update')->name('product.category.type.update');
    });
});

Route::group(['as' => 'supervisor.', 'prefix' => 'supervisor', 'middleware' => ['auth', 'is_supervisor']], function () {

    ## Dashboard
    Route::controller(SupervisorDashboardController::class)->group(function () {
        Route::get('/dashboard', 'supervisor')->name('dashboard');
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
        Route::get('/users/create', 'create')->name('users.create')->middleware(['permission:users-create']);
        Route::get('/users/show', 'show')->name('users.show')->middleware(['permission:users-show']);
        Route::post('/users/store', 'store')->name('users.store');
        Route::put('/users/status/change/{id}', 'statusChange')->name('users.status.change')->middleware(['permission:users-status-change']);
        Route::get('/users/edit/{id}', 'edit')->name('users.edit')->middleware(['permission:users-edit']);
        Route::post('/users/update', 'update')->name('users.update');
    });
});

Route::group(['as' => 'advisor.', 'prefix' => 'advisor', 'middleware' => ['auth', 'is_advisor']], function () {

    ## Dashboard
    Route::controller(AdvisorDashboardController::class)->group(function () {
        Route::get('/dashboard', 'advisor')->name('dashboard');
    });
});
