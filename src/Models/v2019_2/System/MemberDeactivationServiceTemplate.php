<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceTemplate Version v2019_2
 *
 * The Service (Ticket) Templates on which the Member is the assignedTo resource
 *
 * @property MemberReference $reAssignToMember
 * @property int $count
 */
class MemberDeactivationServiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => MemberReference::class,
    ];
}
