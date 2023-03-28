<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Réegion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomRegion'
    ];

    public function itineraires()
    {
        return $this->hasMany(Itineraire::class);
    }
    
}
