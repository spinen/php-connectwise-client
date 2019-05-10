<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2018_4
 *
 * Model for Contact
 *
 * @property Carbon\Carbon $anniversary
 * @property Carbon\Carbon $birthDay
 * @property CompanyReference $company
 * @property ContactDepartmentReference $department
 * @property ContactTypeReference $type
 * @property Guid $mobileGuid
 * @property Metadata $_info
 * @property RelationshipReference $relationship
 * @property SiteReference $site
 * @property array $communicationItems
 * @property array $customFields
 * @property boolean $childrenFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property boolean $disablePortalLoginFlag
 * @property boolean $inactiveFlag
 * @property boolean $marriedFlag
 * @property boolean $unsubscribeFlag
 * @property integer $assistantContactId
 * @property integer $defaultMergeContactId
 * @property integer $id
 * @property integer $managerContactId
 * @property integer $portalSecurityLevel
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $country
 * @property string $facebookUrl
 * @property string $firstName
 * @property string $gender
 * @property string $lastName
 * @property string $linkedInUrl
 * @property string $nickName
 * @property string $portalPassword
 * @property string $presence
 * @property string $school
 * @property string $securityIdentifier
 * @property string $significantOther
 * @property string $state
 * @property string $title
 * @property string $twitterUrl
 * @property string $zip
 */
class Contact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'anniversary' => Carbon\Carbon::class,
        'assistantContactId' => 'integer',
        'birthDay' => Carbon\Carbon::class,
        'childrenFlag' => 'boolean',
        'city' => 'string',
        'communicationItems' => 'array',
        'company' => CompanyReference::class,
        'country' => 'string',
        'customFields' => 'array',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'department' => ContactDepartmentReference::class,
        'disablePortalLoginFlag' => 'boolean',
        'facebookUrl' => 'string',
        'firstName' => 'string',
        'gender' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lastName' => 'string',
        'linkedInUrl' => 'string',
        'managerContactId' => 'integer',
        'marriedFlag' => 'boolean',
        'mobileGuid' => Guid::class,
        'nickName' => 'string',
        'portalPassword' => 'string',
        'portalSecurityLevel' => 'integer',
        'presence' => 'string',
        'relationship' => RelationshipReference::class,
        'school' => 'string',
        'securityIdentifier' => 'string',
        'significantOther' => 'string',
        'site' => SiteReference::class,
        'state' => 'string',
        'title' => 'string',
        'twitterUrl' => 'string',
        'type' => ContactTypeReference::class,
        'unsubscribeFlag' => 'boolean',
        'zip' => 'string',
    ];
}
