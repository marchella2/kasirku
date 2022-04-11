@extends('layouts.layout')

@section('title', 'Data User')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('pagetitle')
    <h3>Data User</h3>
@endsection

@section('pagecontent')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('user.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            <div class="card my-3">
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                @if($item->level == 'kasir')
                                    <td>Kasir</td>
                                @elseif ($item->level == 'admin-kasir')
                                    <td>Admin Kasir</td>
                                @endif
                                <td>
                                    <form action="{{ route('user.destroy', [$item->id])}}" method="post">
                                        <a href="{{ route('user.show', [$item->id]) }}" class="btn btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('user.edit', [$item->id]) }}" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
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


