<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerChronicDisease extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'chronic_disease_id');
    }
}
