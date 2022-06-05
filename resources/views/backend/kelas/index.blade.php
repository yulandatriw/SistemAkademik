@extends('backend.admin.admin')

@section('title', "Daftar Kelas")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/kelas/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>ID</th>
                            <th>NAMA KELAS</th>
                            <th>ID TAHUN AJAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelas as $p)
                        <tr>
                            <!-- <td></td> -->
                            <td>{{ $p->idkelas }}</td>
                            <td>{{ $p->namakelas }}</td>
                            <td>{{ $p->idthnajar }}</td>
                            <td style="width: 200px">
                                <a class="btn btn-primary" href="{{ url('/admin/kelas/update/' . $p -> idkelas) }}">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/kelas/delete/' . $p -> idkelas) }}">Hapus</a>
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