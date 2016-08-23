<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['nama', 'detail'];

    public function participant() {
    	 return $this->hasMany('App\Model\Participant');
    }

    public function category() {
    	 return $this->hasMany('App\Model\Category');
    }

    public function gallery() {
    	 return $this->hasMany('App\Model\Gallery');
    }
}
