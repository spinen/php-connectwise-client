<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Activity Version v2019_3
 *
 * Model for Activity
 *
 * @property ActivityStatusReference $status
 * @property ActivityTypeReference $type
 * @property AgreementReference $agreement
 * @property CampaignReference $campaign
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property CurrencyReference $currency
 * @property Guid $mobileGuid
 * @property MemberReference $assignTo
 * @property MemberReference $assignedBy
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property ReminderReference $reminder
 * @property ScheduleStatusReference $scheduleStatus
 * @property ServiceLocationReference $where
 * @property TicketReference $ticket
 * @property array $customFields
 * @property boolean $notifyFlag
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $notes
 * @property string $phoneNumber
 */
class Activity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'assignTo' => MemberReference::class,
        'assignedBy' => MemberReference::class,
        'campaign' => CampaignReference::class,
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'email' => 'string',
        'id' => 'integer',
        'mobileGuid' => Guid::class,
        'name' => 'string',
        'notes' => 'string',
        'notifyFlag' => 'boolean',
        'opportunity' => OpportunityReference::class,
        'phoneNumber' => 'string',
        'reminder' => ReminderReference::class,
        'scheduleStatus' => ScheduleStatusReference::class,
        'status' => ActivityStatusReference::class,
        'ticket' => TicketReference::class,
        'type' => ActivityTypeReference::class,
        'where' => ServiceLocationReference::class,
    ];
}
