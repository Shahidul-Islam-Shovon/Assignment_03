<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/hello/{id}', [ProfileController::class, 'index']);
