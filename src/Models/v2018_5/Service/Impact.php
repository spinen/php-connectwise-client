<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Impact Version v2018_5
 *
 * Model for Impact
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
 * @property string $description
 * @property string $name
 */
class Impact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
