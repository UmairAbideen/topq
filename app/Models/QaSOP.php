<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QaSOP extends Model
{
    use HasFactory;

    protected $table = 'qa_sops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doc_no',
        'doc_name',
        'eff_date',
        'revision_no',
        'pdf_file',
    ];
}
