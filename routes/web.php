<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ContactController::class, 'index'])->name('index');
Route::get('/create', [ContactController::class, 'create'])->name('create');
Route::get('/show', [ContactController::class, 'show'])->name('show');
Route::get('/edit', [ContactController::class, 'edit'])->name('edit');
Route::get('/form', [ContactController::class, 'form'])->name('form');
Route::get('/', fn () => redirect()->route('contacts.index'));
Route::resource('contacts', ContactController::class);