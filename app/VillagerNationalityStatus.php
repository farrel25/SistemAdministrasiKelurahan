<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerNationalityStatus extends Model
{
    protected $with = ['villagers'];

    public function villagers()
    {
        return $this->hasMany(Villager::class, 'nationality_id');
    }
}
