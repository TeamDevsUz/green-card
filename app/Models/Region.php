<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $fillable = [
        'country_id',
        'name_uz',
        'name_ru',
    ];
    use HasFactory;
    
    public function district_id()
    {
        return $this->hasOne(District::class, 'region_id', 'id');
    }
    public function region_id()
    {
        return $this->hasMany(FamilyMembers::class, 'region_id', 'id');
    }
    
}

