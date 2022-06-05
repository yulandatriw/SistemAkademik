@extends('backend.admin.admin')

@section('title', "Update Nilai")

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
        <form class="form-horizontal" method="post" action="{{ url('/admin/nilai/update/' . $nilai -> nim) }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2">NIM:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nim" value="{{ $nilai -> nim }}" name="nim" readonly />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">MATA KULIAH :</label>
                <div class="col-sm-3">
                    <select name="idmakul" id="idmakul" class="form-control">
                        <option value="ST">Sistem Terdistribusi</option>
                        <option value="PST">Praktikum Sistem Terdistribusi</option>
                        <option value="PWL">Pemrogaman Web Lanjut</option>
                        <option value="PPWL">Praktikum Pemrogaman Web Lanjut</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">TAHUN AJAR :</label>
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
                        <option value="1">TI B</option>
                        <option value="2">TI D</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UK1:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uk1" value="{{ $nilai -> uk1 }}" name="uk1" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UK2:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uk2" value="{{ $nilai -> uk2 }}" name="uk2" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UTS:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uts" value="{{ $nilai -> uts }}" name="uts" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">UAS:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="uas" value="{{ $nilai -> uas }}" name="uas" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection