<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Payment Version v2019_3
 *
 * Model for Payment
 *
 * @property Carbon\Carbon $paymentDate
 * @property InvoiceReference $credit
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
        'credit' => InvoiceReference::class,
        'id' => 'integer',
        'invoice' => InvoiceReference::class,
        'paymentDate' => Carbon\Carbon::class,
        'type' => 'string',
    ];
}
