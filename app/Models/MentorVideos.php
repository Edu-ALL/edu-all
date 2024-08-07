<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorVideos extends Model
{
    use HasFactory;

    protected $table = "tb_mentor_video";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'mentor_id',
        'video_embed',
        'youtube_id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function mentor(){
        return $this->belongsTo(Mentors::class, 'group', 'mentor_id');
    }
}