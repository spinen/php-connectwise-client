<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectContact Version v2019_2
 *
 * Model for ProjectContact
 *
 * @property ContactReference $contact
 * @property Metadata $_info
 * @property int $id
 * @property int $projectId
 */
class ProjectContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'contact' => ContactReference::class,
        'id' => 'integer',
        'projectId' => 'integer',
    ];
}
