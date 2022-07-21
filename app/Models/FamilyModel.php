<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyModel extends Model
{
    
    protected $table = 'family_status';
    protected $fillable = [
        'name_uz',
        'name_ru',
    ];
    use HasFactory;
}
