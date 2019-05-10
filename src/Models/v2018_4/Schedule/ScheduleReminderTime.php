<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleReminderTime Version v2018_4
 *
 * Model for ScheduleReminderTime
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property integer $time
 * @property string $name
 */
class ScheduleReminderTime extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'time' => 'integer',
    ];
}
