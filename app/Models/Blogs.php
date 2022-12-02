<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = "tb_blog";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'slug',
        'cat_id', #category
        'mt_id', #mentor
        'blog_title',
        'blog_description',
        'blog_thumbnail',
        'blog_thumbnail_alt',
        'blog_status',
        'seo_title',
        'seo_keyword',
        'seo_desc',
        'lang',
        'click_count',
        'duration_read',
        'is_highlight',
        'created_at',
        'updated_at'
    ];
}
