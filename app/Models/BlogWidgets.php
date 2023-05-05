<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogWidgets extends Model
{
    use HasFactory;

    protected $table = "tb_blog_widget";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'blog_id',
        'title',
        'description',
        'link',
        'button_name',
        'created_at',
        'updated_at'
    ];

    public function blog(){
        return $this->belongsTo(Blogs::class, 'blog_id', 'id');
    }
}
