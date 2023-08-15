<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = "tb_blog";
    protected $primaryKey = 'id';
    public $timestamps = false;

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
        'publish_date',
        'created_at',
        'updated_at'
    ];

    public function blog_category(){
        return $this->belongsTo(BlogCategorys::class, 'cat_id', 'id');
    }
    public function mentor(){
        return $this->belongsTo(Mentors::class, 'mt_id', 'id');
    }
    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
    public function blog_widget(){
        return $this->hasMany(BlogWidgets::class, 'blog_id', 'id');
    }
    public function blog_read(){
        return $this->hasMany(BlogReads::class, 'blog_id', 'id');
    }
}
