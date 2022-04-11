<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'master_barang';
    protected $fillable = ['nama_barang', 'harga_satuan'];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function transactions(){
        return $this->hasManyThrough(Transaction::class, TransactionDetail::class);
    }
}
