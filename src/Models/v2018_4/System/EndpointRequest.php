<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EndpointRequest Version v2018_4
 *
 * Model for EndpointRequest
 *
 * @property string $body
 * @property string $contentType
 * @property string $id
 * @property string $method
 * @property string $relativeUrl
 */
class EndpointRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'body' => 'string',
        'contentType' => 'string',
        'id' => 'string',
        'method' => 'string',
        'relativeUrl' => 'string',
    ];
}
