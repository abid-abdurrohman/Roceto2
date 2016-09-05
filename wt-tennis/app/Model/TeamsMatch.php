<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeamsMatch extends Model
{
    protected $table = 'matches';
    protected $fillable = ['score', 'participant_id', 'match_id'];

    public function participant() {
       return $this->belongsTo('App\Model\Participant');
    }

    public function match() {
       return $this->belongsTo('App\Model\Match');
    }
}
