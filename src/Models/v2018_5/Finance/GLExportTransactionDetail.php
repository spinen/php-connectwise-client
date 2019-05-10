<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetail Version v2018_5
 *
 * Model for GLExportTransactionDetail
 *
 * @property Carbon\Carbon $documentDate
 * @property CurrencyReference $currency
 * @property IvItemReference $item
 * @property ProductReference $product
 * @property ProductSubCategoryReference $subCategory
 * @property ShipmentMethodReference $shipmentMethod
 * @property SiteReference $warehouseSite
 * @property TaxCodeReference $taxCode
 * @property TimeEntryReference $timeEntry
 * @property UnitOfMeasureReference $unitOfMeasure
 * @property WarehouseBinReference $warehouseBin
 * @property array $taxLevels
 * @property boolean $dropShippedFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $serializedFlag
 * @property boolean $taxable2Flag
 * @property boolean $taxable3Flag
 * @property boolean $taxable4Flag
 * @property boolean $taxable5Flag
 * @property boolean $taxableFlag
 * @property float $cost
 * @property float $itemCost
 * @property float $itemPrice
 * @property float $quantity
 * @property float $taxRate
 * @property float $taxRatePercent
 * @property float $total
 * @property integer $id
 * @property integer $invoiceSummaryOption
 * @property string $accountNumber
 * @property string $cogsXref
 * @property string $costAccountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glItemId
 * @property string $glTypeId
 * @property string $inventoryAccountNumber
 * @property string $inventoryXref
 * @property string $itemDescription
 * @property string $itemTypeXref
 * @property string $locationXref
 * @property string $memo
 * @property string $priceLevelXref
 * @property string $productAccountNumber
 * @property string $salesCode
 * @property string $salesDescription
 * @property string $serialNumbers
 * @property string $taxAgencyXref
 * @property string $taxCodeXref
 * @property string $taxNote
 * @property string $uomScheduleXref
 */
class GLExportTransactionDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'cogsXref' => 'string',
        'cost' => 'float',
        'costAccountNumber' => 'string',
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentDate' => Carbon\Carbon::class,
        'documentType' => 'string',
        'dropShippedFlag' => 'boolean',
        'glClass' => 'string',
        'glItemId' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'inventoryAccountNumber' => 'string',
        'inventoryXref' => 'string',
        'invoiceSummaryOption' => 'integer',
        'item' => IvItemReference::class,
        'itemCost' => 'float',
        'itemDescription' => 'string',
        'itemPrice' => 'float',
        'itemTaxableFlag' => 'boolean',
        'itemTypeXref' => 'string',
        'locationXref' => 'string',
        'memo' => 'string',
        'priceLevelXref' => 'string',
        'product' => ProductReference::class,
        'productAccountNumber' => 'string',
        'quantity' => 'float',
        'salesCode' => 'string',
        'salesDescription' => 'string',
        'serialNumbers' => 'string',
        'serializedFlag' => 'boolean',
        'shipmentMethod' => ShipmentMethodReference::class,
        'subCategory' => ProductSubCategoryReference::class,
        'taxAgencyXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxCodeXref' => 'string',
        'taxLevels' => 'array',
        'taxNote' => 'string',
        'taxRate' => 'float',
        'taxRatePercent' => 'float',
        'taxable2Flag' => 'boolean',
        'taxable3Flag' => 'boolean',
        'taxable4Flag' => 'boolean',
        'taxable5Flag' => 'boolean',
        'taxableFlag' => 'boolean',
        'timeEntry' => TimeEntryReference::class,
        'total' => 'float',
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'uomScheduleXref' => 'string',
        'warehouseBin' => WarehouseBinReference::class,
        'warehouseSite' => SiteReference::class,
    ];
}
