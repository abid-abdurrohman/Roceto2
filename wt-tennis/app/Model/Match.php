<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $fillable = ['no_match', 'nama', 'waktu', 'tempat','winner_match1','winner_match2','winner_match3','winner_match4',
      'category_id'];

    public function category() {
       return $this->belongsTo('App\Model\Category');
    }

    public function teams_match() {
    	 return $this->hasMany('App\Model\TeamsMatch');
    }
}
