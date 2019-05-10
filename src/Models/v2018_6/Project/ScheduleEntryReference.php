<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryReference Version v2018_6
 *
 * Model for ScheduleEntryReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $description
 */
class ScheduleEntryReference extends Model
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
    ];
}
