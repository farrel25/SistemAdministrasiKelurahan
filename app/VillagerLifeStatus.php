<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerLifeStatus extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'life_status_id');
    }
}
