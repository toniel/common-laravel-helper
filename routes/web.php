<?php

use Illuminate\Support\Facades\Route;
use Toniel\CommonHelper\Http\Controllers\RupiahController;
Route::get('/rupiah', [RupiahController::class, 'index'])->name('rupiah.index');