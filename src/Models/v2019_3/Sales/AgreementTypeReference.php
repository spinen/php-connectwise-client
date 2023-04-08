<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeReference Version v2019_3
 *
 * Model for AgreementTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class AgreementTypeReference extends Model
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
