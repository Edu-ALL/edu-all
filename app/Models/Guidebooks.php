<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guidebooks extends Model
{
    use HasFactory;

    protected $table = "tb_guidebook";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'guidebook_category',
        'guidebook_image',
        'guidebook_alt',
        'guidebook_link',
        'guidebook_status',
        'lang',
        'created_at',
        'updated_at'
    ];
}
