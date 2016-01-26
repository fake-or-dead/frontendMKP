<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class ShopOfTheWeek extends Model
{
  use SoftDeletes;

  protected $table        = 'page_content';
  protected $dates        = ['deleted_at'];
  protected $softDelete   = true;
  protected $fillable     = ['location_id', 'user_id', 'name','link_url','image_url','sort_order','start','end','status'];

  // protected static function boot()
  // {
  //   static::addGlobalScope('location', function(Builder $builder) {
  //     $builder->where('types', 'ShopOfTheWeek')->where('parent_id', 0);
  //   });
  // }

  public static function getLocation()
  {
    return \App\Model\Admin\Location::where('types', 'ShopOfTheWeek')->where('types', 'ShopOfTheWeek')->where('parent_id', 0) ;
  }

  public function location()
  {
    return $this->belongsTo(\App\Model\Admin\Location::class, 'location_id');
  }

  public function scopeLocation($query)
  {
      return $query->where('types', 'ShopOfTheWeek')->where('parent_id', 0);
  }

  // public function user()
  // {
  //   return $this->belongsTo(User::class, 'user_id');
  // }

  // public function pageContents()
  // {
  //   return $this->hasMany(PageContent::class, 'location_id');
  // }

  // public function subLocations()
  // {
  //   return $this->hasMany(Location::class, 'parent_id');
  // }
}
