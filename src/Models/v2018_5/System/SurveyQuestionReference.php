<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionReference Version v2018_5
 *
 * Model for SurveyQuestionReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $question
 */
class SurveyQuestionReference extends Model
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
