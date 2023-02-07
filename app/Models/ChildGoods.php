<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
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
