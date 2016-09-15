<?php

namespace App\Model;

use Illuminate\Databse\Eloquent\Model;

Class BuktiPembayaran extends Model
{
	protected $table = 'bukti_pembayaran';
	protected $fillable = ['atas_nama', 'no_rek', 'bank', 'thumbnail', 'participant_id'];

	public function participants(){
		return $this->belongsTo('App\Model\Participant');
	}
}