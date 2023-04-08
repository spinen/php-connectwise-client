<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementBackup Version v2019_1
 *
 * Model for ManagementBackup
 *
 * @property AgreementTypeReference $type
 * @property CatalogItemReference $item
 * @property Metadata $_info
 * @property int $id
 * @property string $billingLevel
 */
class ManagementBackup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billingLevel' => 'string',
        'id' => 'integer',
        'item' => CatalogItemReference::class,
        'type' => AgreementTypeReference::class,
    ];
}
