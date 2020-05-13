<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageSent extends Model
{
    protected $fillable = [
    	'name','email','subject','message'
    ];
}
