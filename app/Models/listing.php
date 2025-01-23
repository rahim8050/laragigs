<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class listing 
{
    public static function all(){
        return [
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
            ];
    }

    public static function find($id){
        $listings = self::all();
        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
