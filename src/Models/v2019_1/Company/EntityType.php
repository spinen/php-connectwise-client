<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EntityType Version v2019_1
 *
 * Model for EntityType
 *
 * @property int $id
 * @property string $code
 * @property string $name
 */
class EntityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
