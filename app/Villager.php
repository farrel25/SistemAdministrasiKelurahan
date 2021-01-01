<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    protected $fillable = [
        'nik',
        'user_id',
        'full_name',
        'sex_id',
        'birth_place',
        'birth_date',
        'religion_id',
        'education_id',
        'profession_id',
        'marital_status_id',
        'nationality_id',
        'father_nik',
        'mother_nik',
        'father_name',
        'mother_name',
        'photo',
        'blood_type_id',
        'stay_status_id',
        'address',
        'life_status_id',
        'disability_id',
        'chronic_disease_id',
        'phone_number',
        'age_range_id',
        'created_by',
        'updated_by'
    ];

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->photo;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function villagerSex()
    {
        return $this->belongsTo(VillagerSex::class, 'sex_id');
    }

    public function villagerReligion()
    {
        return $this->belongsTo(VillagerReligion::class, 'religion_id');
    }

    public function villagerEducation()
    {
        return $this->belongsTo(VillagerEducation::class, 'education_id');
    }

    public function villagerProfession()
    {
        return $this->belongsTo(VillagerProfession::class, 'profession_id');
    }

    public function villagerMaritalStatus()
    {
        return $this->belongsTo(VillagerMaritalStatus::class, 'marital_status_id');
    }

    public function villagerNationality()
    {
        return $this->belongsTo(VillagerNationalityStatus::class, 'nationality_id');
    }

    public function villagerBloodType()
    {
        return $this->belongsTo(VillagerBloodType::class, 'blood_type_id');
    }

    public function villagerStayStatus()
    {
        return $this->belongsTo(VillagerStayStatus::class, 'stay_status_id');
    }

    public function villagerLifeStatus()
    {
        return $this->belongsTo(VillagerLifeStatus::class, 'life_status_id');
    }

    public function villagerDisability()
    {
        return $this->belongsTo(VillagerDisability::class, 'disability_id');
    }

    public function villagerChronicDisease()
    {
        return $this->belongsTo(VillagerChronicDisease::class, 'chronic_disease_id');
    }

    public function villagerAgeRange()
    {
        return $this->belongsTo(VillagerAgeRange::class, 'age_range_id');
    }
}
