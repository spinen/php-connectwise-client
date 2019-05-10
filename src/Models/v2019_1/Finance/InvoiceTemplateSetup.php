<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplateSetup Version v2019_1
 *
 * Model for InvoiceTemplateSetup
 *
 * @property Metadata $_info
 * @property boolean $customFlag
 * @property integer $id
 * @property string $name
 */
class InvoiceTemplateSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'customFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
