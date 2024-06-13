<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//web routing

Route::get('/profile/{id}', [ProfileController::class, 'index']);

