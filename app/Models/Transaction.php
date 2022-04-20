<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TransactionDetail as TransactionDetail;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaksi_pembelian';
    protected $guarded = [];

    public function transactionDetails(){
        return $this->hasMany(TransactionDetail::class, 'transaksi_pembelian_id');
    }
}
