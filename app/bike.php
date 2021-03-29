<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bike extends Model
{
    protected $fillable = ['brand','name','type','size'];
}
