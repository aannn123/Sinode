<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ages extends Model
{
    use SoftDeletes;

    protected $table = 't_ages';

    protected $fillable = [
        'id',
        'number',
    ];
}
