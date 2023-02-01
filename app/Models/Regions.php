<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $table = "tb_region";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'region_id',
        'region',
    ];
}
