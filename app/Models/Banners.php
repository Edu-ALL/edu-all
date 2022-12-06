<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;

    protected $table = "tb_banner";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'banner_img',
        'banner_alt',
        'banner_title',
        'banner_description',
        'banner_button',
        'banner_link',
        'banner_status',
        'lang',
        'created_at',
        'updated_at'
    ];
}
