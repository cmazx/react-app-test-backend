<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class MenuCategory
 * @method static Builder sorted
 */
class MenuCategory extends Model
{
    public $timestamps = false;

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeSorted($query)
    {
        return $query->orderBy('position');
    }

    /**
     * @return HasMany|mixed
     */
    public function positions()
    {
        return $this->hasMany(MenuPosition::class)->scopes(['activeSorted']);
    }
}
