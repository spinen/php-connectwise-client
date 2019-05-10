<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionValue Version v2019_1
 *
 * Model for ConfigurationTypeQuestionValue
 *
 * @property ConfigurationTypeQuestionReference $question
 * @property ConfigurationTypeReference $configurationType
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $value
 */
class ConfigurationTypeQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'configurationType' => ConfigurationTypeReference::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'question' => ConfigurationTypeQuestionReference::class,
        'value' => 'string',
    ];
}
