<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // Mengizinkan semua kolom diisi (Mass Assignment)
    protected $guarded = [];

    // Relasi ke Sales (Satu supplier bisa punya banyak sales)
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
