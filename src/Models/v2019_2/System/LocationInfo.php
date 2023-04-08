<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo Version v2019_2
 *
 * Model for LocationInfo
 *
 * @property Metadata $_info
 * @property bool $location_flag
 * @property int $id
 * @property string $name
 */
class LocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location_flag' => 'boolean',
        'name' => 'string',
    ];
}
