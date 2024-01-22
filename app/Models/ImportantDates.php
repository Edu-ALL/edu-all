<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantDates extends Model
{
    use HasFactory;

    protected $table = "tb_important_dates";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'date',
        'created_at',
        'updated_at'
    ];
}
