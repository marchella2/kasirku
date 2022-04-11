@extends('layouts.layout')

@section('title', 'Input Data Transaksi')

@section('pagetitle')
    <h3>Tambah Data Transaksi</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        @csrf
                        <button type="button" class="btn btn-info mb-2" id="addProduct"><i class="fa fa-plus"></i> Tambah Barang</button>

                        <div class="form-group row" id="block">
                            <label class="col-md-4 form-label" for="master_barang_id">Nama Produk</label>
                            <div class="col-md-8">
                                <select name="master_barang_id[]" id="master_barang_id" class="form-control" type="text" required>
                                    <option value disable>== Pilih Produk ==</option>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_barang }} - {{ $item->harga_satuan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="block">
                            <label class="col-md-4 form-label" for="master_barang_id">Jumlah Pembelian</label>
                            <div class="col-md-8">
                                <input type="number" min="1" class="form-control" name="jumlah" placeholder="Masukkan jumlah" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 form-label">Total Harga</label>
                        <div class="col-md-9">
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($itemCarts as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            <img src="{{ asset($item->image) }}" width="50px" height="50px">
                        </td>
                        <td>Rp {{ $item->price }}</td>
                        <td>{{ $item->cart->quantity }}</td>
                        <td>Rp {{ $item->price * $item->cart->quantity }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ubahJumlah{{ $loop->iteration }}">Ubah</button>
                            <form action="{{ route('cart.destroy', $item->cart) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>

                            <div class="modal fade" id="ubahJumlah{{ $loop->iteration }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Ubah Jumlah '{{ $item->name }}'</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('cart.update', $item->cart) }}" method="post">
                                                @csrf
                                                @method('PATCH')

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="number" min="1" max="{{ $item->stock }}" value="{{ $item->cart->quantity }}" class="form-control" name="quantity" placeholder="Masukkan jumlah..." required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Unit</span>
                                                            <button type="submit" class="btn btn-primary float-right">Ubah</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody> --}}
        </table>
    </div>
@endsection
@push('page_scripts')
    <script>
        $('#addProduct').click(function() {
            $('#block:last').before('<div class="form-group row" id="block">' +
                        '<label class="col-md-4 form-label" for="master_barang_id">Nama Produk</label>' +
                        '<div class="col-md-8">' +
                            '<select name="master_barang_id[]" id="master_barang_id" class="form-control" type="text" required>' +
                                '<option value disable>== Pilih Produk ==</option>' +
                                '@foreach ($barang as $item)' +
                                    '<option value="{{ $item->id }}">{{ $item->nama_barang }} + {{ $item->harga_satuan }}</option>' +
                                '@endforeach' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="form-group row" id="block">' +
                        '<label class="col-md-4 form-label" for="master_barang_id">Jumlah Pembelian</label>' +
                        '<div class="col-md-8">' +
                            '<input type="number" min="1" class="form-control" name="jumlah" placeholder="Masukkan jumlah" required>' +
                        '</div>' +
                    '</div>'
                );
        });
    </script>
@endpush
