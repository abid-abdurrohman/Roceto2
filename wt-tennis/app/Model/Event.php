<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['nama', 'detail'];

    public function category() {
    	 return $this->hasMany('App\Model\Category', 'id');
    }

    public function gallery() {
    	 return $this->hasMany('App\Model\Gallery');
    }
}
