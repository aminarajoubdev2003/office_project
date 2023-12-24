<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotels::class);
    }
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
