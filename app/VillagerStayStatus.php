<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerStayStatus extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'stay_status_id');
    }
}
