<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = ['nama_tim', 'nama_kapten', 'no_hp', 'warna_kostum', 'jumlah_pemain', 'category_id', 'atas_nama', 'no_rek',
    'nama_bank', 'bukti', 'status'];

    public function category() {
    	 return $this->belongsTo('App\Model\Category');
    }

    public function member() {
    	 return $this->hasMany('App\Model\Member');
    }

    public function match() {
    	 return $this->hasMany('App\Model\Match');
    }
}
