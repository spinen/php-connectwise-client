<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2019_2
 *
 * Model for ApiMember
 *
 * @property BoardReference $serviceDefaultBoard
 * @property Carbon\Carbon $inactiveDate
 * @property Metadata $_info
 * @property SecurityRoleReference $securityRole
 * @property StructureReference $structureLevel
 * @property SystemDepartmentReference $defaultDepartment
 * @property SystemLocationReference $defaultLocation
 * @property SystemLocationReference $salesDefaultLocation
 * @property SystemLocationReference $securityLocation
 * @property TimeZoneSetupReference $timeZone
 * @property array $excludedServiceBoardIds
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $emailAddress
 * @property string $identifier
 * @property string $name
 * @property string $notes
 */
class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultDepartment' => SystemDepartmentReference::class,
        'defaultLocation' => SystemLocationReference::class,
        'emailAddress' => 'string',
        'excludedServiceBoardIds' => 'array',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => Carbon\Carbon::class,
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notes' => 'string',
        'salesDefaultLocation' => SystemLocationReference::class,
        'securityLocation' => SystemLocationReference::class,
        'securityRole' => SecurityRoleReference::class,
        'serviceDefaultBoard' => BoardReference::class,
        'structureLevel' => StructureReference::class,
        'timeZone' => TimeZoneSetupReference::class,
    ];
}
