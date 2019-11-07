<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'image','category_id','user_id','status',
    ];

    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function reviews($value='')
    {
        return $this->hasMany('App\Review');
    }
}
