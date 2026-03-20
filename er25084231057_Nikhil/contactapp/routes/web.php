<?php

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.delete');