<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CCM extends Model
{
    protected $fillable = [

        'request_no',
        'logging_date',
        'initiator',
        'department',
        'description',
        'justification',
        'area',
        'impact',

        'action1',
        'action2',
        'action3',
        'priority',
        'required_date',

        'effected_doc1',
        'doc_no1',
        'effected_doc2',
        'doc_no2',
        'effected_doc3',
        'doc_no3',

        'initiated_by',
        'initiation_date',
        'verified_by',
        'verification_date',

        'classification',
        'member_name1',
        'designation1',
        'recommendation1',
        'sign1',

        'member_name2',
        'designation2',
        'recommendation2',
        'sign2',

        'member_name3',
        'designation3',
        'recommendation3',
        'sign3',

        'reviewed_by',
        'review_date',
        'approved_by',
        'approval_date',

        'task1',
        'responsible1',
        'completion_date1',

        'task2',
        'responsible2',
        'completion_date2',

        'task3',
        'responsible3',
        'completion_date3',

        'summary',
        'implementation_date',
        'final_assessment',
        'monitoring',
        'change_closing_date',

        'closed_by',
        'signing_date',

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
