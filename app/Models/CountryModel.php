<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    
    protected $table = 'country';
    protected $fillable = [
        'name_uz',
        'name_ru',
    ];
    use HasFactory;
}
