<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutors extends Model
{
    use HasFactory;

    protected $table = "tb_tutor";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'full_name',
        'experience',
        'subject',
        'thumbnail',
        'alt',
        'created_at',
        'updated_at'
    ];
}
