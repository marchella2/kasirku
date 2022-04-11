@extends('layouts.layout')

@section('title', 'Detail Produk')

@section('pagetitle')
    <h3>Detail Produk</h3>
@endsection

@section('pagecontent')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Nama Produk</label>
                    <div class="col-md-9">
                        <input type="text" value="{{ $barang->nama_barang }}" class="form-control" name="nama_barang" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Harga Produk (satuan)</label>
                    <div class="col-md-9">
                        <input type="number" value="{{ $barang->harga_satuan }}" class="form-control" name="harga_satuan" readonly>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('barang.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
