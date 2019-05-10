<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableExpenseTypeLevel Version v2018_6
 *
 * Model for TaxableExpenseTypeLevel
 *
 * @property Metadata $_info
 * @property TaxCodeLevelReference $taxCodeLevel
 * @property integer $id
 */
class TaxableExpenseTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'taxCodeLevel' => TaxCodeLevelReference::class
    ];
}
