@extends('backend.admin.admin')

@section('title', "Daftar Nilai")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/nilai/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>NIM</th>
                            <th>MATA KULIAH</th>
                            <th>TAHUN AJAR</th>
                            <th>KELAS</th>
                            <th>UK1</th>
                            <th>UK2</th>
                            <th>UTS</th>
                            <th>UAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nilai as $p)
                        <tr>
                            <!-- <td></td> -->
                            <td>{{ $p->nim }}</td>
                            <td>{{ $p->namamakul }}</td>
                            <td>{{ $p->idthnajar }}</td>
                            <td>{{ $p->idkelas }}</td>
                            <td>{{ $p->uk1 }}</td>
                            <td>{{ $p->uk2 }}</td>
                            <td>{{ $p->uts }}</td>
                            <td>{{ $p->uas }}</td>
                            <td style="width: 200px">
                                <a class="btn btn-primary" href="{{ url('/admin/nilai/update/' . $p -> id) }}">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/nilai/delete/' . $p -> id) }}">Hapus</a>
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