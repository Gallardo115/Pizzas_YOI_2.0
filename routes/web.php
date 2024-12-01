<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yoicontroller;



Route::get('/', function () {
    return view('welcome');
});


Route::get('index',[yoicontroller::class,'index'])->name('index');
Route::get('menu',[yoicontroller::class,'menu'])->name('menu');
Route::get('contact',[yoicontroller::class,'contact'])->name('contact');
Route::get('elements',[yoicontroller::class,'elements'])->name('elements');
Route::get('news',[yoicontroller::class,'news'])->name('news');
