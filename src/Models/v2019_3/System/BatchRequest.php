<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchRequest Version v2019_3
 *
 * Model for BatchRequest
 *
 * @property Metadata $headers
 * @property array $requests
 * @property string $id
 */
class BatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'headers' => Metadata::class,
        'id' => 'string',
        'requests' => 'array',
    ];
}
