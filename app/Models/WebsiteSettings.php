<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSettings extends Model
{
    use HasFactory;

    protected $table = "tb_website_settings";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'website_name',
        'website_primary_logo',
        'alt_primary_logo',
        'website_secondary_logo',
        'alt_secondary_logo',
        'phone_number_wa',
        'phone_number_1',
        'phone_number_2',
        'phone_number_3',
        'address',
        'email',
        'linkedin',
        'instagram',
        'youtube_channel',
        'created_at',
        'updated_at'
    ];
}
