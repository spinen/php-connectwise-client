<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2018_4
 *
 * Required when notifyType is set to: "Create a Service Ticket"
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 * @property string $summary
 */
class ServiceTemplateReference extends Model
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
        'summary' => 'string',
    ];
}
