<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $fillable = ['nama', 'home_score', 'away_score', 'home_participant_id', 'away_participant_id'];

    public function participant() {
       return $this->belongsTo('App\Model\Participant');
    }
}
