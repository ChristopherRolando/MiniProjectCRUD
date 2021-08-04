<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'kategori', 'harga'
      ];
      public function item()
    {
        return $this->hasMany(Item::class);
    }
}
