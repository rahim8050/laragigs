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
}
