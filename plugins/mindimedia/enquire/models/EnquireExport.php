<?php namespace Mindimedia\Enquire\Models;

use Backend\Models\ExportModel;
use ApplicationException;

/**
 * Enquire Export Model
 */
class EnquireExport extends ExportModel
{
    public $table = 'mindimedia_enquire_enquiries';

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'enquire_user' => [
            'Backend\Models\User',
            'key' => 'user_id'
        ]
    ];

    public $belongsToMany = [
       
    ];

    /**
     * The accessors to append to the model's array form.
     * @var array
     */
    protected $appends = [
        'author_email'
    ];

    public function exportData($columns, $sessionKey = null)
    {
        $result = self::make()
            ->with([
                'enquire_user'
            ])
            ->get()
            ->toArray()
        ;

        return $result;
    }

    public function getAuthorEmailAttribute()
    {
        if (!$this->enquire_user) return '';
        return $this->enquire_user->email;
    }

}