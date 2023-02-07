<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoes',
        'clothes',
        'headdress',
        'accessories',
    ];
}
