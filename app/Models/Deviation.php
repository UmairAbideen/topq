<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deviation extends Model
{
    protected $fillable = [

        'deviation_date',
        'deviation_no',
        'initiator',
        'department',
        'designation',

        'subject',
        'detail',
        'status',
        'statement',
        'action',
        'date',

        'ini_reviewed_by',
        'ini_review_date',
        'ini_approved_by',
        'ini_approval_date',

        'root_cause',
        'categorization',

        'name1',
        'deisgnation1',
        'recommendation1',
        'date1',

        'name2',
        'deisgnation2',
        'recommendation2',
        'date2',

        'name3',
        'deisgnation3',
        'recommendation3',
        'date3',

        'device',
        'patient',
        'other',
        'verified_by',
        'verification_date',

        'required_recall',
        'recall_no',
        'required_capa',
        'capa_no',
        'required_ccm',
        'ccm_no',

        'capa_task1',
        'capa_name1',
        'capa_designation1',
        'capa_duedate1',
        'remarks',

        'closing_reviewed_by',
        'closing_review_date',
        'closing_approved_by',
        'closing_approval_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden =
        [
            // 'password',
            // 'remember_token',
        ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts =
        [
            // 'email_verified_at' => 'datetime',
            // 'password' => 'hashed',
        ];
}
