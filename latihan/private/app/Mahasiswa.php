<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $guarded = [];
    protected $table = 'tb_mahasiswa';
    protected $fillable = ['id','nim','nama','jurusan'];
}
