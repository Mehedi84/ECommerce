<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Common\RoleController;
use App\Http\Controllers\Backend\Common\UserController;
use App\Http\Controllers\Backend\Common\CouponController;
use App\Http\Controllers\Backend\Common\ProductBrandController;
use App\Http\Controllers\Backend\Common\ProductCategoryController;
use App\Http\Controllers\Backend\Common\ProductSubCategoryController;
use App\Http\Controllers\Backend\Common\ProductChildCategoryController;
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
        Route::get('/users', 'index')->name('users')->middleware(['permission:users-list']);
        Route::get('/users/create', 'create')->name('users.create')->middleware(['permission:users-create']);
        Route::get('/users/show', 'show')->name('users.show')->middleware(['permission:users-show']);
        Route::post('/users/store', 'store')->name('users.store');
        Route::put('/users/status/change/{id}', 'statusChange')->name('users.status.change')->middleware(['permission:users-status-change']);
        Route::get('/users/edit/{id}', 'edit')->name('users.edit')->middleware(['permission:users-edit']);
        Route::post('/users/update', 'update')->name('users.update');
    });

    ## Product Category
    Route::controller(ProductCategoryController::class)->group(function () {
        Route::get('/product/category', 'index')->name('product.category');
        Route::get('/product/category/create', 'create')->name('product.category.create')->middleware(['permission:product-category-show']);
        Route::post('/product/category/store', 'store')->name('product.category.store');
        Route::get('/product/category/show', 'show')->name('product.category.show')->middleware(['permission:product-subcategory-create']);
        Route::put('/product/category/status/change/{id}', 'statusChange')->name('product.category.status.change')->middleware(['permission:product-category-status-change']);
        Route::get('/product/category/edit/{id}', 'edit')->name('product.category.edit')->middleware(['permission:product-category-edit']);
        Route::post('/product/category/update', 'update')->name('product.category.update');
    });

    ## Product Sub Category
    Route::controller(ProductSubCategoryController::class)->group(function () {
        Route::get('/product/subcategory', 'index')->name('product.subcategory');
        Route::get('/product/subcategory/create', 'create')->name('product.subcategory.create')->middleware(['permission:product-subcategory-create']);
        Route::post('/product/subcategory/store', 'store')->name('product.subcategory.store');
        Route::get('/product/subcategory/show', 'show')->name('product.subcategory.show')->middleware(['permission:product-subcategory-create']);
        Route::put('/product/subcategory/status/change/{id}', 'statusChange')->name('product.subcategory.status.change')->middleware(['permission:product-subcategory-create']);
        Route::get('/product/subcategory/edit/{id}', 'edit')->name('product.subcategory.edit')->middleware(['permission:product-subcategory-create']);
        Route::post('/product/subcategory/update', 'update')->name('product.subcategory.update');
    });

    ## Product Child Category
    Route::controller(ProductChildCategoryController::class)->group(function () {
        Route::get('/product/child/category', 'index')->name('product.child.category');
        Route::get('/product/child/category/create', 'create')->name('product.child.category.create')->middleware(['permission:product-subcategory-create']);
        Route::post('/product/child/category/store', 'store')->name('product.child.category.store');
        Route::get('/product/child/category/show', 'show')->name('product.child.category.show')->middleware(['permission:product-subcategory-create']);
        Route::put('/product/child/category/status/change/{id}', 'statusChange')->name('product.child.category.status.change')->middleware(['permission:product-subcategory-create']);
        Route::get('/product/child/category/edit/{id}', 'edit')->name('product.child.category.edit')->middleware(['permission:product-subcategory-create']);
        Route::post('/product/child/category/update', 'update')->name('product.child.category.update');
    });

    ## Product Brand
    Route::controller(ProductBrandController::class)->group(function () {
        Route::get('/product/brand', 'index')->name('product.brand');
        Route::get('/product/brand/create', 'create')->name('product.brand.create')->middleware(['permission:product-brand-show']);
        Route::post('/product/brand/store', 'store')->name('product.brand.store');
        Route::get('/product/brand/show', 'show')->name('product.brand.show')->middleware(['permission:product-brand-create']);
        Route::put('/product/brand/status/change/{id}', 'statusChange')->name('product.brand.status.change')->middleware(['permission:product-brand-status-change']);
        Route::get('/product/brand/edit/{id}', 'edit')->name('product.brand.edit')->middleware(['permission:product-brand-edit']);
        Route::post('/product/brand/update', 'update')->name('product.brand.update');
    });

    ## Coupon
    Route::controller(CouponController::class)->group(function () {
        Route::get('/coupon', 'index')->name('coupon');
        Route::get('/coupon/create', 'create')->name('coupon.create')->middleware(['permission:coupon-show']);
        Route::post('/coupon/store', 'store')->name('coupon.store');
        Route::get('/coupon/show', 'show')->name('coupon.show')->middleware(['permission:coupon-create']);
        Route::put('/coupon/status/change/{id}', 'statusChange')->name('coupon.status.change')->middleware(['permission:coupon-status-change']);
        Route::get('/coupon/edit/{id}', 'edit')->name('coupon.edit')->middleware(['permission:coupon-edit']);
        Route::post('/coupon/update', 'update')->name('coupon.update');
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
    ## Product Category
    Route::controller(ProductCategoryController::class)->group(function () {
        Route::get('/product/category', 'index')->name('product.category');
        Route::get('/product/category/create', 'create')->name('product.category.create')->middleware(['permission:product-category-show']);
        Route::post('/product/category/store', 'store')->name('product.category.store');
        Route::get('/product/category/show', 'show')->name('product.category.show')->middleware(['permission:product-subcategory-create']);
        Route::put('/product/category/status/change/{id}', 'statusChange')->name('product.category.status.change')->middleware(['permission:product-category-status-change']);
        Route::get('/product/category/edit/{id}', 'edit')->name('product.category.edit')->middleware(['permission:product-category-edit']);
        Route::post('/product/category/update', 'update')->name('product.category.update');
    });
});

Route::group(['as' => 'advisor.', 'prefix' => 'advisor', 'middleware' => ['auth', 'is_advisor']], function () {

    ## Dashboard
    Route::controller(AdvisorDashboardController::class)->group(function () {
        Route::get('/dashboard', 'advisor')->name('dashboard');
    });
});
