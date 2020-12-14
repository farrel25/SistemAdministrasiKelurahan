<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerNationalityStatus extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'nationality_id');
    }
}
