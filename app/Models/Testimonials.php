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
        'testi_subtitle',
        'testi_category',
        'testi_subcategory',
        'testi_thumbnail',
        'testi_alt',
        'testi_status',
        'lang',
        'created_at',
        'updated_at'
    ];

    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}
