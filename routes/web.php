<?php

use App\Http\Controllers\ProfileController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});




