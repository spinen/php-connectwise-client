<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSubTypeReference Version v2019_1
 *
 * Model for ServiceSubTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceSubTypeReference extends Model
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
