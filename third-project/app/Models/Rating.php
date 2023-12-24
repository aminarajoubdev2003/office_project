<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->belongsto(Customer::class);
    }
    public function hotel()
    {
        return $this->belongsto(Hotel::class);
    }
}
