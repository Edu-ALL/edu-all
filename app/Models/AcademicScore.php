<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'score_raw',
        'score_final',
        'subject',
        'image',
        'point',
        'medal',
        'grade',
        'school',
        'order',
    ];

    public function scopeSortByUser($query, $orderBy = 'order', $direction = 'asc')
    {
        return $query->orderBy($orderBy, $direction);
    }
}
