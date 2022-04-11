@extends('layouts.layout')

@section('title', 'Edit Data Produk')

@section('pagetitle')
    <h3>Edit Data Produk</h3>
@endsection

@section('pagecontent')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" class="form-horizontal" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Role</label>
                        <div class="col-md-9">
                            <select name="level" class="form-control" type="text" required>
                                @if ($user->level == 'kasir')
                                    <option value="{{ $user->level }}">Kasir</option>
                                @elseif($user->level == 'admin-kasir')
                                    <option value="{{ $user->level }}">Admin Kasir</option>
                                @endif
                                <option value="kasir">Kasir</option>
                                <option value="admin-kasir">Admin Kasir</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" value="{{ $user->password }}" required>
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
