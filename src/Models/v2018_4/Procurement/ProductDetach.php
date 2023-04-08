<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductDetach Version v2018_4
 *
 * Model for ProductDetach
 *
 * @property bool $removeFromInvoice
 * @property bool $removeFromOpportunity
 * @property bool $removeFromProject
 * @property bool $removeFromSalesOrder
 * @property bool $removeFromTicket
 */
class ProductDetach extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'removeFromInvoice' => 'boolean',
        'removeFromOpportunity' => 'boolean',
        'removeFromProject' => 'boolean',
        'removeFromSalesOrder' => 'boolean',
        'removeFromTicket' => 'boolean',
    ];
}
