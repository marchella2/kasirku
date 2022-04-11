@extends('layouts.layout')

@section('title', 'Tambah Data Produk')

@section('pagetitle')
    <h3>Tambah data barang</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('barang.store') }}" class="form-horizontal" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Nama Produk</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama produk" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Harga Produk (satuan)</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="harga_satuan" placeholder="Masukkan harga barang (dalam bentuk rupiah)" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <a href="{{ route('barang.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
