<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

Route::get('/',[HomeController::class, 'index'])->name('index')  ;
Route::get('/register',[HomeController::class, 'FormRegister'])->name('Form.Register'); 
Route::post('/register',[HomeController::class, 'Register'])->name('Register'); 
