<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeReference Version v2019_5
 *
 * Model for ConfigurationTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ConfigurationTypeReference extends Model
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
