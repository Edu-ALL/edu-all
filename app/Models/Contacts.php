<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = "tb_contact";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
        'created_at',
        'updated_at'
    ];
}
