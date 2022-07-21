<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaDeadline extends Model
{
    protected $table = 'green_card_deadline';
    protected $fillable = [
        'name_uz',
        'name_ru',
        'deadline',
    ];
    use HasFactory;
}
