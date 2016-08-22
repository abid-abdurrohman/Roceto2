<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['nama', 'event_id'];

    public function event() {
    	 return $this->belongsTo('App\Model\Event');
    }
}
