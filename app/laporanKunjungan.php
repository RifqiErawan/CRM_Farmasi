<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanKunjungan extends Model
{
    protected $table = "table_laporan_kunjungan";

   protected $fillable =['id','nama','spesialisasi','kontak','tglKunjungan','catatan'];
}
