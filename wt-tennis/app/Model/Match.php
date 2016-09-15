<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $fillable = ['no_match', 'nama', 'waktu', 'tempat', 'status', 'youtube', 'deskripsi', 'category_id'];

    public function category() {
       return $this->belongsTo('App\Model\Category');
    }

    public function match_team() {
    	 return $this->hasMany('App\Model\Match_team');
    }
}
