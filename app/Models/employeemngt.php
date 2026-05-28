<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employeemngt extends Model
{
    protected $table = 'employeemngt';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'add',
        'dob',
        'cont',

    ];

}
