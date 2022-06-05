@extends('backend.admin.admin')

@section('content')
<div class="container">

    <h1>Pekerja Proyek <a href="{{ url('/admin/pekerja_proyek/add') }}" class="btn btn-primary btn-xs" title="Tambah Pekerja Proyek Baru"><span class="glyphicon glyphicon-plus" aria-hidden="true" /></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id Proyek</th>
                    <th>NIP</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@endsection