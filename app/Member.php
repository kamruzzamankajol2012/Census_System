<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = [
        'user_id', 'nid','bid', 'name','birth_date','occupation','education','relation_with_khana','present_address','mobile_no','sex','marital_status','religion','nationality','living_style'
    ];
     
}
