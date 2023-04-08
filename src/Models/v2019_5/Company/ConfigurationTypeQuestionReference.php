<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionReference Version v2019_5
 *
 * Model for ConfigurationTypeQuestionReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $question
 */
class ConfigurationTypeQuestionReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'question' => 'string',
    ];
}
