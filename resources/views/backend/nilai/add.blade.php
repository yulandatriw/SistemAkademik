@extends('backend.admin.admin')

@section('title', "Tambah Mahasiswa")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/nilai/add') }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">NIM:</label>
                <!--NIP-->
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" name="nim">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">MATA KULIAH :</label>
                <div class="col-sm-3">
                    <select name="idmakul" id="idmakul" class="form-control">
                        @foreach($matkul as $p)
                        <option value="{{ $p->idmakul }}"> {{ $p->namamakul }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">TAHUN AJAR:</label>
                <div class="col-sm-3">
                    <select name="idthnajar" id="idthnajar" class="form-control">
                        <option value="1">2018</option>
                        <option value="2">2019</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">KELAS :</label>
                <div class="col-sm-3">
                    <select name="idkelas" id="idkelas" class="form-control">
                        @foreach($kelas as $p)
                        <option value="{{ $p->idkelas }}"> {{ $p->namakelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UK1:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uk1" placeholder="UK 1" name="uk1">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UK2:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uk2" placeholder="UK 2" name="uk2">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UTS:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uts" placeholder="UTS" name="uts">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UAS:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uas" placeholder="UAS" name="uas">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection