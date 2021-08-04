<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'nota', 'kode_barang', 'qty'
      ];
      public function barang()
      {
          return $this->belongsTo(Barang::class);
      }
      public function penjualan()
      {
          return $this->belongsTo(Penjualan::class);
      }
}
