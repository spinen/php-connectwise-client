<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingVariable Version v2018_4
 *
 * Model for ParsingVariable
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $code
 * @property string $name
 */
class ParsingVariable extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'code' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
