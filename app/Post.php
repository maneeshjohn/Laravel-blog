<?php

namespace App;

use Carbon\carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function scopeFilter($query, $filters)
    {
      if (isset($filters['month']))
      {
        $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
      }
 
      if (isset($filters['year']))
      {
        $query->whereYear('created_at', $filters['year']);
      }

    }

    public static function archives()
    {
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')->orderByRaw('min(created_at)')->get()->toArray();
    }

}
