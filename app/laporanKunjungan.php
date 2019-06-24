<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanKunjungan extends Model
{
    protected $table = "table_laporan_kunjungan";

   protected $fillable =['id','create_at','updated_at','nama','spesialisasi','kontak','tglKunjungan'];
}
