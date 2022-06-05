@extends('backend.admin.admin')

@section('content')
<div class="container">

    <h1>Kelas <a href="{{ url('/admin/departemen/create') }}" class="btn btn-primary btn-xs" title="Tambah Departemen Baru"><span class="glyphicon glyphicon-plus" aria-hidden="true" /></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <!-- <th>No</th><th> No Departemen </th><th> Nama Departemen </th><th>Aksi</th> -->
                    <th>No</th>
                    <th> No Kelas </th>
                    <th> Nama Kelas </th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@endsection