<?php

use App\Http\Controllers\ProfileController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{$id}', function (Listing 
$listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});




