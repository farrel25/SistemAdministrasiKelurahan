<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class DashboardSubMenu extends Model
{
    protected $fillable = ['menu_id', 'sub_menu', 'url_path', 'icon', 'is_active'];

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'menu_id');
    }

    public function dashboardMenu()
    {
        return $this->belongsTo(DashboardMenu::class, 'menu_id');
    }
}
