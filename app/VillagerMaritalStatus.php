<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillagerMaritalStatus extends Model
{
    public function villagers()
    {
        return $this->hasMany(Villager::class, 'marital_status_id');
    }
}
