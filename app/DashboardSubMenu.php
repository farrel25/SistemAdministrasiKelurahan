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

    public function dashboardMenu()
    {
        return $this->belongsTo(DashboardMenu::class, 'menu_id');
    }
}
