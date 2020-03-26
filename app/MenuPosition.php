<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuPosition
 *
 * @method static Builder activeSorted
 * @property \App\MenuPositionOptionValue|\Illuminate\Database\Eloquent\Collection options
 */
class MenuPosition extends Model
{
    public $timestamps = false;

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActiveSorted(Builder $query): Builder
    {
        return $query
            ->where('active', '=', true)
            ->orderBy('position');
    }

    public function options()
    {
        return $this->hasMany(MenuPositionOptionValue::class);
    }
}
