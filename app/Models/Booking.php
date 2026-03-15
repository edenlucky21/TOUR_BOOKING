<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['tour_id','customer_name','status'];

    public function tour() {
        return $this->belongsTo(Tour::class);
    }
}