<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerAgeRange extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'age_range_id');
    }
}
