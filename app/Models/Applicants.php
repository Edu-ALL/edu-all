<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'cv_path',
        'screen_question_1',
        'screen_answer_1',
        'screen_question_2',
        'screen_answer_2',
        'screen_question_3',
        'screen_answer_3',
    ];

    public function career()
    {
        return $this->belongsTo(Careers::class, 'job_id');
    }
}
