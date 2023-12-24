<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function hotel()
    {
        return $this->hasmany(City::class);
    }
    public function Ticket()
    {
        return $this->hasmany(Ticket::class);
    }
}
