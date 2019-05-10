<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentTypeReference Version v2018_4
 *
 * Model for AdjustmentTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class AdjustmentTypeReference extends Model
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
