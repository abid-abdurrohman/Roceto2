<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['nama', 'thumbnail', 'peraturan', 'biaya_pendaftaran', 'kuota', 'event_id'];

    public function event() {
    	 return $this->belongsTo('App\Model\Event');
    }

    public function participant() {
    	 return $this->hasMany('App\Model\Participant');
    }

    public function match() {
    	 return $this->hasMany('App\Model\Match');
    }
}
