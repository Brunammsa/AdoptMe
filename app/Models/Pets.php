<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'size',
        'description',
        'city_id',
        'users_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function files()
    {
        return $this->hasOne(Files::class);
    }

    public function cities()
    {
        return $this-> belongsTo(City::class, 'cities_id');
    }
}
