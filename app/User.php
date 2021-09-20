<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'full_name', 'email', 'password', 'phone', 'photo', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function letterSubmissions()
    {
        return $this->hasMany(LetterSubmission::class);
    }

    public function villager()
    {
        return $this->hasOne(Villager::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // ini jangan di uncomment dulu, ntar eror pas register
    // SQLSTATE[HY000]: General error: 1364 Field 'model_type' doesn't have a default value
    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'model_has_roles', 'model_id', 'role_id');
    // }

    // public function articleComments()
    // {
    //     return $this->hasMany(ArticleComment::class, 'email', 'email');
    // }

    public function complaints() {
        $this->hasMany(Complaint::class);
    }

    public function complaintComments() {
        return $this->hasMany(ComplaintComment::class);
    }

    public function umkmProfile() {
        return $this->hasOne(UmkmProfile::class);
    }
}
