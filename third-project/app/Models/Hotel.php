<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsto(city::class);
    }
    public function rating()
    {
        return $this->hasmany(Rating::class);
    }
    public function booking()
    {
        return $this->hasmany(Booking::class);
    }
}
