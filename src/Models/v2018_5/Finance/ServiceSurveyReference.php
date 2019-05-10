<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyReference Version v2018_5
 *
 * Model for ServiceSurveyReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceSurveyReference extends Model
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
