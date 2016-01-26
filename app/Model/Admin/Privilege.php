<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Privilege extends Model
{
  use SoftDeletes;

    protected $table        = 'page_content';
    protected $dates        = ['deleted_at'];
    protected $softDelete   = true;
    protected $fillable     = ['id', 'location_id', 'user_id','name','link_url','image_url','start','end','created_at','status', 'sort_order'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'location_id');
    }

    public function subLocations()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
}
