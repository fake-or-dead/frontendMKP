<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showtime extends Model
{
    use SoftDeletes;

    protected $table        = 'showtime';
    protected $dates        = ['deleted_at'];
    protected $fillable     = ['page_content_id', 'start', 'end'];
    protected $softDelete   = true;

    public function pageContent()
    {
        return $this->belongsTo(PageContent::class, 'page_content_id');
    }
}
