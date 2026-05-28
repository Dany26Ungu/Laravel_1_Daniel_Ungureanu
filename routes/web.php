<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ShoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chiSiamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chiSiamo/deteil/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/shoes', [ShoesController::class, 'ShoesList'])->name('Shoes.list');

Route::get('/shoes/detail{id}', [ShoesController::class, 'ShoesDetail'])->name('shoes.detail');