<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
