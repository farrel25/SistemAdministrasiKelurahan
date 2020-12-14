<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerDisability extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'disability_id');
    }
}
