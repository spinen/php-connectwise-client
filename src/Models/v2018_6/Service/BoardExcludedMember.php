<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardExcludedMember Version v2018_6
 *
 * Model for BoardExcludedMember
 *
 * @property Metadata $_info
 * @property int $boardId
 * @property int $id
 * @property int $memberId
 */
class BoardExcludedMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardId' => 'integer',
        'id' => 'integer',
        'memberId' => 'integer',
    ];
}
