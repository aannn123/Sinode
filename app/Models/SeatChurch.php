<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatChurch extends Model
{
    protected $table = 't_church_seats';
    protected $fillable = [
        'churc_id', 'number', 'status'
    ];
}
