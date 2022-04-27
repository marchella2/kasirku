<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Barang;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaksi_pembelian_barang';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class, 'master_barang_id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'id');
    }
}
