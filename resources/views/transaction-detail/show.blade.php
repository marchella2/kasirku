@extends('layouts.layout')

@section('title', 'Detail Data Transaksi')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('pagetitle')
    <h3>Detail Data Transaksi</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-stripped">
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
                                    <td>{{ $detail->barang['nama_barang'] }}</td>
                                    <td>{{ $detail->jumlah }}</td>
                                    <td>{{ $detail->harga_satuan }}</td>
                                    <td>{{ $detail->harga_satuan * $detail->jumlah }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tr>
                            <td colspan="4"><center><b>Tanggal Transaksi</b></center></td>
                            <td><b>{{ date('d F Y', strtotime($transaction->created_at)) }}</b></td>
                        </tr>
                        <tr>
                            <td colspan="4"><center><b>Total Harga</b></center></td>
                            <td><b>Rp. {{ $transaction->total_harga }}</b></td>
                        </tr>
                    </table>

                    <div class="float-left">
                        <a href="{{ route('print-laporan', $transaction->id) }}" class="btn btn-success">Print Transaksi</a>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection

@push('page_scripts')
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
@endpush
