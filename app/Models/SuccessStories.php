<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStories extends Model
{
    use HasFactory;

    protected $table = "tb_success_stories";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'name',
        'badge_1',
        'badge_2',
        'badge_3',
        'badge_4',
        'description',
        'status',
        'thumbnail',
        'thumbnail_alt',
        'achievement_image',
        'achievement_alt',
        'video_link',
        'lang',
        'created_at',
        'updated_at'
    ];

    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}
