<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name', 'designation', 'office', 'serial', 'status', 'comment', 'vote_status', 'priority'
    ];
}
