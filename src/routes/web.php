<?php

use Illuminate\Support\Facades\Route;
use Kenura\Inspire\Controllers\InspirationController;

Route::get('inspire', [InspirationController::class, 'single'])->name('inspire.index');
Route::get('inspire/{count}', [InspirationController::class, 'multiple'])->name('inspire.index')->whereNumber('id');