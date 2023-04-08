<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CallbackEntry Version v2018_5
 *
 * Model for CallbackEntry
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $memberId
 * @property int $objectId
 * @property string $description
 * @property string $level
 * @property string $type
 * @property string $url
 */
class CallbackEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'level' => 'string',
        'memberId' => 'integer',
        'objectId' => 'integer',
        'type' => 'string',
        'url' => 'string',
    ];
}
