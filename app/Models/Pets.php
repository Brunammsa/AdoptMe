<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breeds',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function cities()
    {
        return $this-> belongsTo(City::class, 'cities_id');
    }
}
