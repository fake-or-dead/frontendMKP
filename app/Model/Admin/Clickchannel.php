<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClickChannel extends Model
{
  use SoftDeletes;

  protected $table        = 'page_content';
  protected $dates        = ['deleted_at'];
  protected $fillable     = ['location_id','user_id','name','link_url','sort_order','start','end','status'];
  protected $softDelete   = true;

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ClickChannel', function(Builder $builder) {
      $builder->where('location_id', 3);
    });
  }

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
