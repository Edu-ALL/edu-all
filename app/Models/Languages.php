<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;

    protected $table = "tb_lang";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'language_id',
        'language',
    ];
}
