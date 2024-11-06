<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'brand', 'year', 'price_per_day', 'description', 'image'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

