<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MrmAttendance extends Model
{
    protected $fillable = [
        'meeting_no',

        'name1',
        'department1',
        'name2',
        'department2',
        'name3',
        'department3',

        'name4',
        'department4',
        'name5',
        'department5',
        'name6',
        'department6',

        'name7',
        'department7',
        'signature',
        'prepared_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden =
        [

        ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts =
        [

        ];
}
