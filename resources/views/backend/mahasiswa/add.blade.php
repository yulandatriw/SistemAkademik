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
        <form class="form-horizontal" method="post" action="{{ url('/admin/mahasiswa/add') }}">
            @csrf
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">NIM:</label>
                NIP
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" name="nim">
                </div>
            </div> -->
            <div class="form-group">
                <label class="control-label col-sm-2">NIM:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nim" placeholder="NIM Mahasiswa" name="nim">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">NAMA MAHASISWA:</label>
                <!--NAMA PEGAWAI-->
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Mahasiswa" name="nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">TELEPON :</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="telp" placeholder="TELEPON" name="telp">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">DEPARTEMEN:</label>
                <div class="col-sm-3">
                    <select name="id_dept" id="id_dept" class="form-control">
                        <option value="EDP">Electronic Data Processing</option>
                        <option value="MANREP">Manajemen Representative</option>
                        <option value="MARK">Marketing</option>
                        <option value="OPS">Operasional</option>
                        <option value="ENG">Engineering</option>
                        <option value="FIN">Finance</option>
                    </select>
                </div>
            </div> -->
            <div class="form-group">
                <label class="control-label col-sm-2">EMAIL </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="email" placeholder="Email Mahasiswa" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">TEMPAT LAHIR</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="tmp_lahir" placeholder="Kota Kelahiran Mahasiswa" name="tmp_lahir">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">TANGGAL LAHIR</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir Mahasiswa" name="tgl_lahir">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">ALAMAT</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Domisili Mahasiswa" name="alamat">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">MAHASISWA PASSWORD</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="pass" placeholder="Password Mahasiswa" name="pass">
                </div>
            </div> -->
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">JENIS KELAMIN</label>
                <div class="col-sm-3">
                    <select name="jenkel" id="jenkel" class="form-control">
                        <option value="1">Pria</option>
                        <option value="0">Wanita</option>
                    </select>
                </div>
            </div> -->
            <!-- <div class="form-group">
                <label class="control-label col-sm-2">GOLONGAN DARAH</label>
                <div class="col-sm-3">
                    <select name="goldar" id="goldar" class="form-control">
                        <option value="O">O</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">AGAMA</label>
                <div class="col-sm-3">
                    <select name="agama" id="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">JABATAN</label>
                <div class="col-sm-3">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="Dir">Direktur</option>
                        <option value="Wadir">Wakil Direktur</option>
                        <option value="Deputi">Deputi</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">STATUS PERNIKAHAN</label>
                <div class="col-sm-3">
                    <select name="pernikahan" id="pernikahan" class="form-control">
                        <option value="1">Kawin</option>
                        <option value="0">Belum Kawin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">KEWARGANEGARAAN</label>
                <div class="col-sm-3">
                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div> -->
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection