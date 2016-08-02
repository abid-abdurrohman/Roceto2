<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['nama_tim', 'nama_kapten', 'no_hp', 'warna_kostum', 'jml_pemain'];
}
