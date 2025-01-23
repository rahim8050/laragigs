<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'latest listings',
        'listings' =>[
            [
            'id'=>1,
            'title'=>'listing one',
            'description'=>'lorem ipsum idios ipsium'

            ],
            [
                'id'=>2,
                'title'=>'listing two',
                'description'=>'lorem ipsum idios ipsium'
    
                ]
        ]
    ]);
});


