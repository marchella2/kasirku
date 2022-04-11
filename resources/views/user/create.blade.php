@extends('layouts.layout')

@section('title', 'Tambah Data User')

@section('pagetitle')
    <h3>Tambah Data User</h3>
@endsection

@section('pagecontent')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.store') }}" class="form-horizontal" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Role</label>
                        <div class="col-md-9">
                            <select name="level" class="form-control" type="text">
                                <option value disable>== Pilih Role ==</option>
                                <option value="kasir">Kasir</option>
                                <option value="admin-kasir">Admin Kasir</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <a href="{{ route('user.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
