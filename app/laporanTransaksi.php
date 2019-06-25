<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanTransaksi extends Model
{
   protected $table = "datatransaksi";

   protected $fillable =['id','create_at','updated_at','nama','spesialisasi','tglKunjungan','namaObat','banyak','harga'];
}
