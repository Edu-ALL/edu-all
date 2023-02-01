<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogReads extends Model
{
    use HasFactory;

    protected $table = "tb_blog_read";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'ip_address',
        'blog_id',
        'created_at',
        'updated_at'
    ];

    public function blog(){
        return $this->belongsTo(Blogs::class, 'blog_id', 'id');
    }
}
