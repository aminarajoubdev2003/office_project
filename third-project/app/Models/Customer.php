<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile',
        'gender',
        'email',
        
    ];

    public function tickets() {
        return $this->hasMany(ticket::class);
    }
}
