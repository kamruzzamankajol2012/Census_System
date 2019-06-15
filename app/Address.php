<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'house_name_no','road_name_no', 'village_name','union','post_code','thana_name','district'
    ];

}
