<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table = 'individuals';
    protected $fillable = ['fullname', 'nickname', 'no_hp', 'ttl'];
}
