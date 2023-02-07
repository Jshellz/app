<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriesGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoes',
        'clothes',
        'headdress',
        'accessories',
    ];

    /**
     * Relation with model men
     * @return HasMany
     */
    public function menGoods(): HasMany
    {
        return $this->hasMany(MenGoods::class);
    }

    /**
     * Relation with model women
     * @return HasMany
     */
    public function womenGoods(): HasMany
    {
        return $this->hasMany(WomenGoods::class);
    }

    /**
     * Relation with model child
     * @return HasMany
     */
    public function childGoods(): HasMany
    {
        return $this->hasMany(ChildGoods::class);
    }

    /**
     * Relation with model brand
     * @return HasMany
     */
    public function brandGoods(): HasMany
    {
        return $this->hasMany(BrandGoods::class);
    }


}
