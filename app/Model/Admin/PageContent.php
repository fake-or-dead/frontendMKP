<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageContent extends Model
{
    use SoftDeletes;
    
    protected $table        = 'page_content';
    protected $dates        = ['deleted_at'];
    protected $softDelete   = true;

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'page_content_id');
    }

    public function imageDescription()
    {
        return $this->hasOne(ImageDescription::class, 'page_content_id');
    }
}
