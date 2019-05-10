<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardDefault Version v2018_4
 *
 * Model for BoardDefault
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property integer $agreementId
 * @property integer $id
 */
class BoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'board' => BoardReference::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'serviceType' => ServiceTypeReference::class,
    ];
}
