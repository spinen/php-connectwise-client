<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyType Version v2018_4
 *
 * Model for CompanyType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $vendorFlag
 * @property integer $id
 * @property string $name
 */
class CompanyType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'vendorFlag' => 'boolean',
    ];
}
