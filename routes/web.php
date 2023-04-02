<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\Role\RoleAndPermissionController;

//Frontend home page view route:
Route::get('/',[FrontendController::class,'index'])->name('index');

//Auth routs:
Auth::routes();

 

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    
    Route::controller(RoleAndPermissionController::class, 'index')->prefix('role')->name('role.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::put('update/{id}','update')->name('update');
        Route::delete('delete/{id}','destroy')->name('delete');
        Route::post('permission/store','permission')->name('permission');
    });
});

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function(){
    require __DIR__ .'/roleAssign/role-assign.php';
});

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function(){
    require __DIR__ .'/userProfile/user-profile.php';
});

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function(){
    require __DIR__ .'/category/category.php';
});