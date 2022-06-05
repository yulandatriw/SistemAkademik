@extends('backend.admin.admin')

@section('title', "Update Kelas")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/kelas/update/' . $kelas -> idkelas) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">ID KELAS:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="idkelas" value="{{ $kelas -> idkelas }}" name="idkelas" readonly />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NAMA KELAS:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namakelas" value="{{ $kelas -> namakelas }}" name="namakelas">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ID TAHUN AJAR</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="idthnajar" value="{{ $kelas -> idthnajar }}" name="idthnajar">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection