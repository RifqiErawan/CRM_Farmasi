<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//yoga
class produkModel extends Model
{
    protected $table = "produk";

   protected $fillable =['kodeobat','namaobat','aturanpakai','carakerjaobat','efeksamping','indikasi','jenisobat','komposisi','kontraindikasi','peringatanobat'];
}
