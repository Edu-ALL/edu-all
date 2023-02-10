<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategorys extends Model
{
    use HasFactory;

    protected $table = "tb_blog_category";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'category_name',
        'slug',
        'lang',
        'created_at',
        'updated_at'
    ];

    public function blog(){
        return $this->hasMany(Blogs::class, 'cat_id', 'id');
    }
    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}
