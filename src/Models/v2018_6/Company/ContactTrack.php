<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack Version v2018_6
 *
 * Model for ContactTrack
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property Metadata $_info
 * @property integer $actionRemaining
 * @property integer $actionTaken
 * @property integer $id
 * @property integer $trackId
 * @property string $endDate
 * @property string $name
 * @property string $startDate
 * @property string $startedBy
 */
class ContactTrack extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'actionRemaining' => 'integer',
        'actionTaken' => 'integer',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'endDate' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'startDate' => 'string',
        'startedBy' => 'string',
        'trackId' => 'integer',
    ];
}
