<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
  use SoftDeletes;

    protected $table        = 'location';
    protected $dates        = ['deleted_at'];
    protected $softDelete   = true;
    protected $fillable     = ['user_id', 'location_name', 'limit', 'width', 'height', 'parent_id', 'sort_order', 'types', 'flag_last', 'status'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('banner', function(Builder $builder) {
            $builder->where('types', 'Banner')->where('parent_id', 0);
        });
    }

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'location_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subBanners()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
}
