<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleAssign\RoleAssignController;

Route::controller(RoleAssignController::class)->prefix('role-assign')->name('role-assign.')->group(function(){
    Route::get('/','index')->middleware('role_or_permission:super-admin|admin')->name('index');
    Route::get('create', 'create')->middleware('role_or_permission:super-admin|admin')->name('create');
    Route::post('/','store')->middleware('role_or_permission:super-admin|admin')->name('store');
    Route::get('edit/{id}','edit')->middleware('role_or_permission:super-admin|admin')->name('edit');
    Route::put('update/{id}','update')->middleware('role_or_permission:super-admin|admin')->name('update');
    Route::delete('delete/{id}','destroy')->middleware('role_or_permission:super-admin|admin')->name('delete');
});