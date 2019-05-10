<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericBoardTeamReference Version v2019_2
 *
 * Model for GenericBoardTeamReference
 *
 * @property Metadata $_info
 * @property boolean $isProjectTeamFlag
 * @property integer $id
 * @property string $name
 */
class GenericBoardTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'isProjectTeamFlag' => 'boolean',
        'name' => 'string',
    ];
}
