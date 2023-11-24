<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'states_id'
    ];

    public function states()
    {
        return $this->belongsTo(States::class, 'state_id');
    }

    public function pets()
    {
        return $this->hasMany(Pets::class, 'pets_id', 'cities_id');
    }
}