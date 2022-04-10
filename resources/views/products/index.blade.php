@extends('layouts.layout')

@section('title', 'Data Produk')

@section('pagetitle')
    <h3>Data Produk</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('barang.create') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
            <div class="card my-3">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->harga_satuan }}</td>
                                <td>
                                    <form action="{{ route('barang.destroy', [$item->id])}}" method="post">
                                        <a href="{{ route('barang.show', [$item->id]) }}" class="btn btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('barang.edit', [$item->id]) }}" class="btn btn-icon btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-icon btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
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
