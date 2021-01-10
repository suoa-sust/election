<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
