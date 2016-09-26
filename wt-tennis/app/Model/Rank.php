<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table = 'ranks';
    protected $fillable = ['title', 'deskripsi', 'point', 'event_id'];

    public function statistic()
    {
      return $this->belongsTo('App\Model\Statistic');
    }

    public function event()
    {
      return $this->belongsTo('App\Model\Event');
    }
}
