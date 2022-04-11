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
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Nama Lengkap</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Role</label>
                    <div class="col-md-9">
                        <select name="level" class="form-control" type="text" readonly>
                            @if ($user->level == 'kasir')
                                <option value="{{ $user->level }}">Kasir</option>
                            @elseif($user->level == 'admin-kasir')
                                <option value="{{ $user->level }}">Admin Kasir</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('user.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
