<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
