<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = [
      'tgl', 'kode_pelanggan', 'subtotal'
    ];
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
