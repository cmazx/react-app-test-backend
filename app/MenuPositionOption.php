<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuPosition
 *
 * @method static Builder activeSorted
 */
class MenuPositionOption extends Model
{
    public $timestamps = false;
    protected $casts = [
        'values' => 'JSON',
    ];

}
