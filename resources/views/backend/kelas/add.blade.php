@extends('backend.admin.admin')

@section('title', "Tambah Kelas")

@section('content')
<div class="row">
    <div class="container">
        @if (session("success"))
        <div class="alert alert-primary">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </div>
        @endif
        <form class="form-horizontal" method="post" action="{{ url('/admin/kelas/add') }}">
            @csrf

            <div class="form-group">
                <label class="control-label col-sm-2">ID KELAS:</label>
                <!--NAMA PEGAWAI-->
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="idkelas" placeholder="ID Kelas" name="idkelas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NAMA KELAS:</label>
                <!--NAMA PEGAWAI-->
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namakelas" placeholder="Nama Kelas" name="namakelas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ID TAHUN AJAR :</label>
                <!-- <div class="col-sm-4">
                    <input type="text" class="form-control" id="idthnajar" placeholder="ID TAHUN AJAR" name="idthnajar">
                </div> -->
                <div class="col-sm-3">
                    <select name="idthnajar" id="idthnajar" class="form-control">
                        @foreach($thnajar as $p)
                        <option value="{{ $p->idthnajar }}"> {{ $p->ket }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection