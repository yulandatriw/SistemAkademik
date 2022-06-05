@extends('backend.admin.admin')

@section('title', "Daftar Mata Kuliah")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/matakuliah/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>ID</th>
                            <th>NAMA MATA KULIAH</th>
                            <th>SEMESTER</th>
                            <th>SKS</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matakuliah as $p)
                        <tr>
                            <!-- <td></td> -->
                            <td>{{ $p->idmakul }}</td>
                            <td>{{ $p->namamakul }}</td>
                            <td>{{ $p->semester }}</td>
                            <td>{{ $p->sks }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td style="width: 200px">
                                <a class="btn btn-primary" href="{{ url('/admin/matakuliah/update/' . $p -> idmakul) }}">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/matakuliah/delete/' . $p -> idmakul) }}">Hapus</a>
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