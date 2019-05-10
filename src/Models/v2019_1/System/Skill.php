<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Skill Version v2019_1
 *
 * Model for Skill
 *
 * @property Metadata $_info
 * @property SkillCategoryReference $category
 * @property integer $id
 * @property string $name
 */
class Skill extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'category' => SkillCategoryReference::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
