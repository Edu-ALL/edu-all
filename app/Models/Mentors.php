<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    use HasFactory;

    protected $table = "tb_mentor";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'mentor_firstname',
        'mentor_lastname',
        'mentor_graduation',
        'currently_working',
        'expertise',
        'description',
        'short_desc',
        'mentor_picture',
        'mentor_alt',
        'mentor_status',
        'lang',
        'created_at',
        'updated_at'
    ];

    public function mentor_video(){
        return $this->hasMany(MentorVideo::class, 'group', 'mentor_id');
    }
}
