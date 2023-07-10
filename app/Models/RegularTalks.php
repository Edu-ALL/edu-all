<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularTalks extends Model
{
    use HasFactory;

    protected $table = "tb_regular_talk";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'topic',
        'topic_slug',
        'date',
        'time',
        'recommended_for',
        'form_link',
        'description',
        'key_takeaways',
        'speaker_image',
        'status',
        'created_at',
        'updated_at'
    ];
}
