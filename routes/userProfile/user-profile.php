<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleAssign\RoleAssignController;
use App\Http\Controllers\Backend\UserProfile\UserProfileController;

Route::controller(UserProfileController::class)->prefix('user-profile')->name('user-profile.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('edit/{id}','edit')->name('edit');
    Route::put('update/{id}','update')->name('update');
    Route::delete('delete/{id}','destroy')->name('delete');
});