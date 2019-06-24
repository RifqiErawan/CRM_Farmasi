<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_praktek extends Model
{
    protected $table = 'jadwal_praktek';
    protected $fillable = [
        'id',
        'alamat',
        'hari',
        'waktu_buka',
        'waktu_tutup',
        'id_dokter',
    ];

    public $timestamps = false;
    public function dokter(){
        return $this->HasMany('App\jadwal_praktek');
    }
}