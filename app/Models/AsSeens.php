<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsSeens extends Model
{
    use HasFactory;

    protected $table = "tb_as_seen";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'thumbnail',
        'alt',
        'created_at',
        'updated_at'
    ];
}
