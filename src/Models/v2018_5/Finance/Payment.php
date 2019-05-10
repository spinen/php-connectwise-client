<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2018_5
 *
 * Model for Payment
 *
 * @property Carbon\Carbon $paymentDate
 * @property InvoiceReference $invoice
 * @property Metadata $_info
 * @property float $amount
 * @property integer $id
 * @property string $appliedBy
 * @property string $type
 */
class Payment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'amount' => 'float',
        'appliedBy' => 'string',
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'paymentDate' => Carbon\Carbon::class,
        'type' => 'string',
    ];
}
