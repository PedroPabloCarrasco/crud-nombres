<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', [Users::class, 'index'])->name('index');
