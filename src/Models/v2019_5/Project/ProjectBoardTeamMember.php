<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2019_5
 *
 * Model for ProjectBoardTeamMember
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ProjectRoleReference $projectRole
 * @property WorkRoleReference $workRole
 * @property int $id
 */
class ProjectBoardTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'projectRole' => ProjectRoleReference::class,
        'workRole' => WorkRoleReference::class,
    ];
}
