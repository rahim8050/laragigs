<?php

use App\Http\Controllers\ProfileController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'latest listings',
        'listings' => Listing::all()
    ]);
});
Route::get('/listings/{$id}',function($id){
    return view ('listing',[
        'listing'=>listing::find($id)
    ]);
});


