<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('priority', 'asc');
        });
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function candidatesByYear($yearId)
    {
        return $this->hasMany(Candidate::class)->where('year_id', $yearId);
    }
}
