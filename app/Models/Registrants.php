<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrants extends Model
{
    use SoftDeletes;
    protected $table = 't_registrants';
    protected $fillable = [
        'church_id', 'code', 'church_name', 'church_seat_id', 'worship_id', 'fullname', 'address', 'region', 'gender', 'age', 'phone_number', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'answer_6', 'answer_7', 'answer_8', 'status'
    ];

    public function worship()
    {
        return $this->hasOne(Worships::class, 'id', 'worship_id');
    }

    public function seat()
    {
        return $this->hasOne(SeatChurch::class, 'id', 'church_seat_id');
    }


    public function gereja()
    {
        return $this->belongsTo(Gereja::class, 'church_id', 'id');
    }
}
