<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function hotels()
    {
        return $this->hasMany(City::class);
    }
    public function tckets()
    {
        return $this->hasMany(Ticket::class);
    }
}
