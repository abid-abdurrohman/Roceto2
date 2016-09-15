<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = ['id', 'nama_tim', 'no_hp', 'email', 'warna_kostum', 'jumlah_pemain', 'status', 'category_id', 
        'user_id'];

    public function category() {
    	 return $this->belongsTo('App\Model\Category');
    }

    public function member() {
    	 return $this->hasMany('App\Model\Member');
    }

    public function match() {
    	 return $this->hasMany('App\Model\Match');
    }

    public function bukti_pembayaran(){
        return $this->hasOne('App\Model\BuktiPembayaran');
    }

    public function users(){
        return $this->belongsTo('App\Model\User');
    }
}
