@extends('backend.admin.admin')

@section('title', "Update pekerja_proyek")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/pekerja_proyek/update/' . $pekerja_proyek -> id) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">ID:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="id" value="{{ $pekerja_proyek -> id }}" name="id" readonly />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ID PROYEK:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="id_proyek" value="{{ $pekerja_proyek -> id_proyek }}" name="id_proyek">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NIP:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nip" value="{{ $pekerja_proyek -> nip }}" name="nip">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">WAKTU:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="waktu" value="{{ $pekerja_proyek -> waktu }}" name="waktu">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">KETERANGAN:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="ket" value="{{ $pekerja_proyek -> ket }}" name="ket">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection