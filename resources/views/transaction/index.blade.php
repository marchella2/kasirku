@extends('layouts.layout')

@section('title', 'Data Transaksi')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('pagetitle')
    <h3>Data Transaksi</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card my-3">
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered table-md">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Waktu Transaksi</th>
                                <th>Total Transaksi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ date('l, d F Y h:i', strtotime($item->created_at)) }}</td>
                                <td class="text-right">Rp. {{ $item->total_harga }}</td>
                                <td>
                                   <center>
                                    <a href="{{ route('transaksi.show', [$item->id]) }}" class="btn btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                   </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

