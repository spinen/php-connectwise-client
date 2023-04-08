<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamReference Version v2018_5
 *
 * Model for SalesTeamReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 */
class SalesTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
