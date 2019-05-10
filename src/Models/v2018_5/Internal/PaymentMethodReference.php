<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentMethodReference Version v2018_5
 *
 * Model for PaymentMethodReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class PaymentMethodReference extends Model
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
