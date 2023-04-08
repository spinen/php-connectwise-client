<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipientReference Version v2019_2
 *
 * Model for NotificationRecipientReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class NotificationRecipientReference extends Model
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
        'name' => 'string',
    ];
}
