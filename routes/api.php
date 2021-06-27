<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMailController;

Route::get('contact', [ContactMailController::class, 'contact']);
