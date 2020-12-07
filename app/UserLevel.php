<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $fillable = ['level'];

    public function users()
    {
        return $this->hasMany(User::class, 'user_level_id');
    }
}
