<?php

use App\Http\Controllers\ProfileController;
use App\Models\listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'latest listings',
        'listings' => listing::all()
    ]);
});


