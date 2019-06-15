<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    protected $fillable = [
        'user_id', 'house_own_type','house_wall', 'latrin_type','total_land','source_of_water','occupation','number_of_person_in_abroad','electricity'
    ];

}
