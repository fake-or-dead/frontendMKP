<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class ShopOfTheWeek extends Model
{
  use SoftDeletes;

  protected $table            = 'page_content';
  protected $dates            = ['deleted_at'];
  protected $softDelete       = true;
  protected $fillable         = ['location_id', 'user_id', 'name','link_url','image_url','sort_order','start','end','status'];
  private static $type        = 'ShopOfTheWeek' ;

  protected static function boot()
  {
    static::addGlobalScope('ShopOfTheWeek', function(Builder $builder) {
      $builder->where('location_id', Location::where('types', self::$type)->where('parent_id', 0)->first()->id);
    });

    static::creating(function ($ShopOfTheWeek) {
      $ShopOfTheWeek->location_id = Location::where('types', self::$type)->where('parent_id', 0)->first()->id ;
    });
  }

  public static function getLocation()
  {
    return Location::where('types', 'ShopOfTheWeek')->where('types', 'ShopOfTheWeek')->where('parent_id', 0) ;
  }

  public function location()
  {
    return $this->belongsTo(Location::class, 'location_id');
  }

  public function scopeLocation($query)
  {
      return $query->where('types', 'ShopOfTheWeek')->where('parent_id', 0);
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  // public function pageContents()
  // {
  //   return $this->hasMany(PageContent::class, 'location_id');
  // }

  // public function subLocations()
  // {
  //   return $this->hasMany(Location::class, 'parent_id');
  // }
}
