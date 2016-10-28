<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    protected $fillable = [
    	'flyer_name',
    	'flyer_img',
    	'flyer_img_thumb',
    	'flyer_estado'
    ];
}
