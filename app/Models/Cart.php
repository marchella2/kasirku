<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['master_barang_id', 'quantity'];

    public function barang(){
        return $this->belongsTo(Barang::class, 'master_barang_id');
    }
}
