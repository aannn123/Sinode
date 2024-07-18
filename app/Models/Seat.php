<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use SoftDeletes;

    protected $table = 't_church_seats';

    protected $fillable = [
        'id',
        'churc_id',
        'number',
        'status',
    ];
}
