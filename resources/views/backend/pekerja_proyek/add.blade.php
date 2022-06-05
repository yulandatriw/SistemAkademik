@extends('backend.admin.admin')

@section('title', "Tambah Pekerja Proyek")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/pekerja_proyek/add') }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">ID:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="id" placeholder="ID" name="id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ID PROYEK:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="id_proyek" placeholder="ID PROYEK" name="id_proyek">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NIP:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">WAKTU:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="waktu" placeholder="WAKTU" name="waktu">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">KETERANGAN:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="ket" placeholder="KETERANGAN" name="ket">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection