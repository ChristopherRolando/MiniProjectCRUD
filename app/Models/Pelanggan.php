<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = [
      'nama', 'domisili', 'jenis_kelamin'
    ];
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
