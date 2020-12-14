<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerSex extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'sex_id');
    }
}
