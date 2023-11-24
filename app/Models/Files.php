<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_upload',
        'mime',
        'pets_id',
        'file'
    ];

    public function pets()
    {
        return $this->belongsTo(Pets::class);
    }
}
