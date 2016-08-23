<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = ['nama_tim', 'nama_kapten', 'no_hp', 'warna_kostum', 'jml_pemain', 'event_id'];

    public function category() {
    	 return $this->belongsTo('App\Model\Category');
    }
}
