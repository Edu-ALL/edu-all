<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingEvents extends Model
{
    use HasFactory;

    protected $table = "tb_upcoming_event";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'category',
        'event_date',
        'event_thumbnail',
        'event_alt',
        'event_title',
        'event_subtitle',
        'event_detail',
        'event_rsvp_link',
        'event_status',
        'lang',
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
