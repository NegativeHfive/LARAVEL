<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'size_in_km', 'solar_system_id'];

    // Relatie: Elke planeet hoort bij één zonnestelsel
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}
?>
