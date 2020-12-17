<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class DashboardSubMenu extends Model
{
    public function permission()
    {
        return $this->belongsTo(Permission::class, 'menu_id');
    }
}
