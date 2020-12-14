<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerBloodType extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'blood_type_id');
    }
}
