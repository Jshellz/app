<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WomenGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_women',
    ];

    /**
     * Relation to model categories
     * @return BelongsTo
     */
    public function relationTo(): BelongsTo
    {
        return $this->belongsTo(CategoriesGoods::class);
    }

}
