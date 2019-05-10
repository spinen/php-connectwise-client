<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheetReference Version v2018_6
 *
 * Model for TimeSheetReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class TimeSheetReference extends Model
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
