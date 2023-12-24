<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->belongsto(customer::class);
    }
    public function hotel()
    {
        return $this->belongsto(Hotel::class);
    }
    public function ticket()
    {
        return $this->belongsto(Ticket::class);
    }
}
