<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = "tb_career";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'job_position',
        'department',
        'work_type',
        'application_deadline',
        'status',
        'about_the_role',
        'job_description',
        'requirements',
        'working_arrangement',
        'created_at',
        'updated_at'
    ];
}
