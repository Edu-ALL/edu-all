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
        'image',
        'video_link',
        'alt',
        'accepatance',
        'mentees',
        'scholarship',
        'sat_score',
        'statisfaction_rate',
        'created_at',
        'updated_at'
    ];

    public function regions(){
        return $this->belongsTo(Regions::class, 'region', 'region_id');
    }
    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}
