<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorValues extends Model
{
    use HasFactory;

    protected $table = "tb_mentor_value";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'mentor_id',
        'lang',
        'group',
        'value',
        'created_at',
        'updated_at'
    ];

    public function mentor(){
        return $this->belongsTo(Mentors::class, 'group', 'mentor_id');
    }

    public function languages()
    {
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}
