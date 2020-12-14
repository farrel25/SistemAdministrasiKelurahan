<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerReligion extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'religion_id');
    }
}
