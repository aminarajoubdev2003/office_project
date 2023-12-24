<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsto(City::class);
    }
    public function booking()
    {
        return $this->hasmany(Booking::class);
    }
}
