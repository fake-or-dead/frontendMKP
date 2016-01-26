<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class ShopOfTheWeek extends Model
{
  use SoftDeletes;

  protected $table        = 'location';
  protected $dates        = ['deleted_at'];
  protected $softDelete   = true;
  protected $fillable     = ['id', 'user_id', 'parent_id','location_name','sort_order','limit','width','height','flag_last','type','status'];

  protected static function boot()
  {
    static::addGlobalScope('ShopOfTheWeek', function(Builder $builder) {
      $builder->where('types', 'ShopOfTheWeek')->where('parent_id', 0);
    });
  }

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
