<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
