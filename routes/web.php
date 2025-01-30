<?php

use index;
use App\Models\Listing;
use Termwind\Components\Li;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ListingController::class, 'index']);
    
Route::get('/listings/{$Listing}', [ListingController::class, 'show']);






