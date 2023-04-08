<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingTerm Version v2018_4
 *
 * Model for BillingTerm
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $dueDays
 * @property int $id
 * @property string $name
 * @property string $termsXref
 */
class BillingTerm extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'dueDays' => 'integer',
        'id' => 'integer',
        'name' => 'string',
        'termsXref' => 'string',
    ];
}
