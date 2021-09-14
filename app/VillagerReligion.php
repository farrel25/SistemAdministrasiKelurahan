<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerReligion extends Model
{
    protected $with = ['villagers'];

    public function villagers()
    {
        return $this->hasMany(Villager::class, 'religion_id');
    }
}
