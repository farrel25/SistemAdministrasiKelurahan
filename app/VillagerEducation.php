<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerEducation extends Model
{
    protected $with = ['villagers'];

    public function villagers()
    {
        return $this->hasMany(Villager::class, 'education_id');
    }
}
