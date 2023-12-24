<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    public function rating()
    {
        return $this->hasmany(Rating::class);
    }
    public function booking()
    {
        return $this->hasmany(Booking::class);
    }
}
