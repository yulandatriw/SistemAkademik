@extends('backend.admin.admin')

@section('title', "Update Mata Kuliah")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/matakuliah/update/' . $matakuliah -> idmakul) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">ID MAKUL:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="idmakul" value="{{ $matakuliah -> idmakul }}" name="idmakul" readonly />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NAMA MATA KULIAH:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namamakul" value="{{ $matakuliah -> namamakul }}" name="namamakul">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">SEMESTER</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="semester" value="{{ $matakuliah -> semester }}" name="semester">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">SKS</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="sks" value="{{ $matakuliah -> sks }}" name="sks">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">KETERANGAN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keterangan" value="{{ $matakuliah -> keterangan }}" name="keterangan">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection