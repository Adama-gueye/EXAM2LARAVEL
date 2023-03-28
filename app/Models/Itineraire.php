<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomItineraire',
        'tarif'
    ];

    public function region()
    {
        return $this->belongsTo(Réegion::class);
    }
}
