<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductType Version v2019_1
 *
 * Model for ProductType
 *
 * @property Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 * @property string $typeXref
 */
class ProductType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'typeXref' => 'string'
    ];
}
