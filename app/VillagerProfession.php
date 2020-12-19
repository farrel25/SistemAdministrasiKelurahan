<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerProfession extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'profession_id');
    }
}
