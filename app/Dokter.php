<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = [
        'id',
        'nama',
        'spesialisasi',
        'kontak',
        'potensi',
        'jadwal',
    ];

    public $timestamps = false;

    public function jadwal(){
        return $this->belongsTo('App\Dokter');
    }
}
