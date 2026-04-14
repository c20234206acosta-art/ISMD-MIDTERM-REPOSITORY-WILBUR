<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'public::pages.index')->name('index');
Route::livewire('/about', 'public::pages.about')->name('about'); 
Route::livewire('/contact', 'public::pages.contact')->name('contact');   
Route::livewire('/login', 'auth::login')->name('login');
Route::livewire('/logout', 'auth::logout')->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::livewire('/dashboard', 'admin::pages.dashboard')->name('admin.dashboard');

    //roles
     Route::livewire('/roles', 'admin::pages.role.view-role')->name('admin.role.view');
     Route::livewire('/roles/create', 'admin::pages.role.create-role')->name('admin.role.create');
     Route::livewire('/roles/edit/{role}', 'admin::pages.role.edit-role')->name('admin.role.edit');

    //users
    Route::livewire('/users', 'admin::pages.user.view-user')->name('admin.user.view');
    Route::livewire('/users/shop-owners', 'admin::pages.user.view-shop-owner')->name('admin.user.shop-owner');
    Route::livewire('/users/employees', 'admin::pages.user.view-employee')->name('admin.user.employee');
    Route::livewire('/users/create', 'admin::pages.user.create-user')->name('admin.user.create');
    Route::livewire('/users/edit/{user}', 'admin::pages.user.edit-user')->name('admin.user.edit');

});

Route::middleware(['auth', 'role:shop owner'])->prefix('shop-owner')->group(function () {

    Route::livewire('/dashboard', 'shop-owner::pages.dashboard')->name('shop-owner.dashboard');

    //employee
    Route::livewire('/employee', 'shop-owner::pages.employee.view-employee')->name('shop-owner.employee.view');
    Route::livewire('/employee/create', 'shop-owner::pages.employee.create-employee')->name('shop-owner.employee.create');
    
});

Route::middleware(['auth', 'role:employee'])->prefix('employee')->group(function () {

    Route::livewire('/dashboard', 'employee::pages.dashboard')->name('employee.dashboard');

});

Broadcast::routes();

