@extends('backend.admin.admin')

@section('title', "Daftar Mahasiswa")

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/mahasiswa/add') }}">Tambah</a>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>NO</th> -->
                            <th>NIM</th>
                            <th>NAMA MAHASISWA</th>
                            <th>TELEPON</th>
                            <th>EMAIL</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $p)
                        <tr>
                            <!-- <td></td> -->
                            <td>{{ $p->nim }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->telp }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td style="width: 200px">
                                <a class="btn btn-primary" href="{{ url('/admin/mahasiswa/update/' . $p -> nim) }}">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Anda yakin menghapus ')" href="{{ url('/admin/mahasiswa/delete/' . $p -> nim) }}">Hapus</a>
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