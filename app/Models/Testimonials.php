<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $table = "tb_testimonial";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'testi_name',
        'testi_desc',
        'testi_program',
        'testi_category',
        'testi_thumbnail',
        'testi_alt',
        'testi_status',
        'lang',
        'created_at',
        'updated_at'
    ];
}
