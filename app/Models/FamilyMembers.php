<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMembers extends Model
{
    
    protected $table = 'family_members';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'birthdate',
        'user_image',
        'country_id',
        'region_id',
        'district_id',
        'education_level',
    ];
    use HasFactory;
    
    public function family_country_name()
    {
        return $this->hasOne(CountryModel::class, 'id', 'country_id');
    }
    
    public function family_region_name()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
    
    public function family_district_name()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }
    
    public function education_name()
    {
        return $this->hasOne(EducationalLevelModel::class, 'id', 'education_level');
    }
    
    
}
