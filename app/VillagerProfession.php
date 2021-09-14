<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerProfession extends Model
{
    protected $with = ['villagers'];

    public function villagers()
    {
        return $this->hasMany(Villager::class, 'profession_id');
    }
}
