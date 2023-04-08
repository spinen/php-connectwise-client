<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetailTaxLevel Version v2018_6
 *
 * Model for GLExportTransactionDetailTaxLevel
 *
 * @property bool $taxableFlag
 * @property int $taxLevel
 */
class GLExportTransactionDetailTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxLevel' => 'integer',
        'taxableFlag' => 'boolean',
    ];
}
