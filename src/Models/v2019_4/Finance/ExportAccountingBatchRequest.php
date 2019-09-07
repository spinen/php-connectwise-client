<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExportAccountingBatchRequest Version v2019_4
 *
 * Model for ExportAccountingBatchRequest
 *
 * @property Carbon $thruDate
 * @property array $excludedExpenseIds
 * @property array $excludedInvoiceIds
 * @property array $excludedProductIds
 * @property array $includedExpenseIds
 * @property array $includedInvoiceIds
 * @property array $includedProductIds
 * @property boolean $exportExpensesFlag
 * @property boolean $exportInvoicesFlag
 * @property boolean $exportProductsFlag
 * @property integer $locationId
 * @property string $batchIdentifier
 * @property string $glInterfaceIdentifier
 * @property string $summarizeInvoices
 */
class ExportAccountingBatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'batchIdentifier' => 'string',
        'excludedExpenseIds' => 'array',
        'excludedInvoiceIds' => 'array',
        'excludedProductIds' => 'array',
        'exportExpensesFlag' => 'boolean',
        'exportInvoicesFlag' => 'boolean',
        'exportProductsFlag' => 'boolean',
        'glInterfaceIdentifier' => 'string',
        'includedExpenseIds' => 'array',
        'includedInvoiceIds' => 'array',
        'includedProductIds' => 'array',
        'locationId' => 'integer',
        'summarizeInvoices' => 'string',
        'thruDate' => Carbon::class
    ];
}
