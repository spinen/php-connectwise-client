<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EPayConfiguration Version v2018_4
 *
 * Model for EPayConfiguration
 *
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property integer $id
 * @property string $encryptionKey
 * @property string $initializationVector
 * @property string $storeIdentifier
 * @property string $url
 */
class EPayConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'currency' => CurrencyReference::class,
        'encryptionKey' => 'string',
        'id' => 'integer',
        'initializationVector' => 'string',
        'location' => SystemLocationReference::class,
        'storeIdentifier' => 'string',
        'url' => 'string',
    ];
}
