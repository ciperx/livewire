<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::livewire('users/table', 'users.table')->layout('layouts.app', ['title' => 'User Data Table']);
Route::livewire('products', 'products.index')->layout('layouts.app', ['title' => 'All Products']);
