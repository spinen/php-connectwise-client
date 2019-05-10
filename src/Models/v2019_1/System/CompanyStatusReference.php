<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyStatusReference Version v2019_1
 *
 * Required when notifyType is set to: "Change Company Status"
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CompanyStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
