<?php

namespace Spinen\ConnectWise\Models\v2018_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentType Version v2018_5
 *
 * Model for PaymentType
 *
 * @property ClassificationReference $classification
 * @property Metadata $_info
 * @property bool $companyFlag
 * @property bool $defaultFlag
 * @property int $id
 * @property string $name
 */
class PaymentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'classification' => ClassificationReference::class,
        'companyFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
