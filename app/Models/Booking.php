<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'origin',
        'destination',
        'travel_date',
        'travel_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
