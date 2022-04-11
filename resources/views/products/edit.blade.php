@extends('layouts.layout')

@section('title', 'Edit Produk')

@section('pagetitle')
    <h3>Edit Produk</h3>
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
                <button class="btn btn-success" type="submit">Simpan</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>
    </div>
</div>
@endsection
