@extends('layouts.layout')

@section('title', 'Detail Data Transaksi')

@section('pagetitle')
    <h3>Detail Data Transaksi</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <b>{{ date('d F Y', strtotime($transaction->created_at)) }}</b>
                    </div>

                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Pembelian</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction->transactionDetails as $detail)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $detail->barang->nama_barang }}</td>
                                    <td>{{ $detail->jumlah }}</td>
                                    <td>{{ $detail->harga_satuan }}</td>
                                    <td>{{ $detail->harga_satuan * $detail->jumlah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
