<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyCustomNote Version v2018_4
 *
 * Model for CompanyCustomNote
 *
 * @property CompanyReference $company
 * @property CompanyStatusReference $status
 * @property Metadata $_info
 * @property integer $id
 * @property string $customNote
 */
class CompanyCustomNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'customNote' => 'string',
        'id' => 'integer',
        'status' => CompanyStatusReference::class,
    ];
}
