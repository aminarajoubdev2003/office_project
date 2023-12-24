<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsTo(city::class);
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
