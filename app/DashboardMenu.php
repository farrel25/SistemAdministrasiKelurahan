<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DashboardMenu extends Model
{
    protected $fillable = ['name'];

    public function dashboardSubMenus()
    {
        return $this->hasMany(DashboardSubMenu::class, 'menu_id');
    }
}
