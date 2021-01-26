<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DashboardMenu extends Model
{
    public function dashboardSubMenus()
    {
        return $this->hasMany(DashboardSubMenu::class, 'menu_id');
    }
}
