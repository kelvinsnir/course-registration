<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = ['coursename', 'teachername', 'totalhours' ];
}
