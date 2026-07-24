<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('tarefas', [TaskController::class, 'index']);

require __DIR__ . '/settings.php';
