<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::get();
        return view('transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        DB::beginTransaction();

        try{
            Transaction::create(request()->all())
            ->transactionDetails()
            ->createMany(Cart::all()->map(function ($cart) {
                return [
                    'master_barang_id' => $cart->master_barang_id,
                    'jumlah' => $cart->quantity,
                    'harga_satuan' => $cart->barang->harga_satuan
                ];
            })->toArray());

            // Delete data in cart table
            DB::table('cart')->delete();

            DB::commit();
        } catch (Exception $e){
            DB::rollback();
        }

        $transaction = Transaction::latest()->first();
        $product = TransactionDetail::with('barang')->get();
        // return redirect()->route('transaksi.show', $transaction);
        return view('transaction.show', compact('transaction', 'product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        $products = TransactionDetail::with('barang')->get();
        return view('transaction-detail.show', compact('transaction', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function print_struk(){
        $transaction = Transaction::latest()->first();
        $struk = PDF::loadView('transaction.struk', ['transaction' => $transaction]);

        return $struk->stream('struk-belanja.pdf');
    }

    public function print_laporan($id){
        $transaction = Transaction::find($id);
        $laporan = PDF::loadView('transaction.laporan', ['transaction' => $transaction]);

        return $laporan->stream('laporan-belanja.pdf');
    }
}
