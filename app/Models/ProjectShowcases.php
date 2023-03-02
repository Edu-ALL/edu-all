<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectShowcases extends Model
{
    use HasFactory;

    protected $table = "tb_project_showcase";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'category',
        'project_name',
        'description',
        'thumbnail',
        'alt',
        'gallery',
        'status',
        'created_at',
        'updated_at'
    ];
}
