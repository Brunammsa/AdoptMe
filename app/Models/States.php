<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abbreviation',
    ];
    
    public function cities()
    {
        return $this->hasMany(Cities::class, 'state_id');
    }
}