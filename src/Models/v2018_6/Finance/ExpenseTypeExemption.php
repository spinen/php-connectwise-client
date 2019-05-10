<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExemption Version v2018_6
 *
 * Model for ExpenseTypeExemption
 *
 * @property ExpenseTypeReference $expenseType
 * @property Metadata $_info
 * @property array $taxableLevels
 * @property integer $id
 */
class ExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'expenseType' => ExpenseTypeReference::class,
        'id' => 'integer',
        'taxableLevels' => 'array'
    ];
}
