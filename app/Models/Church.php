<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 't_churchs';
    protected $fillable = [
        'name','seat','address'
    ];
}
