<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalLevelModel extends Model
{
    
    
    protected $table = 'educational_level';
    protected $fillable = [
        'name_uz',
        'name_ru',
    ];
    use HasFactory;
}
