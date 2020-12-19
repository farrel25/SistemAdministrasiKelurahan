<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerEducation extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'education_id');
    }
}
