<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuLocationReference Version v2019_1
 *
 * Model for MenuLocationReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class MenuLocationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
