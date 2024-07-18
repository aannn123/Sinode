<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worships extends Model
{
    protected $table = 't_worships';

    protected $fillable = [
        'id',
        'name',
        'time',
        'date',
        'quota',
        'r_quota',
        'status'
    ];

}
