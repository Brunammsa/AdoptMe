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
        'cities_id',
        'users_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function files()
    {
        return $this->hasMany(Files::class, 'pets_id');
    }

    public function cities()
    {
        return $this-> belongsTo(Cities::class, 'cities_id');
    }
}
