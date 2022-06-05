<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ApiMahasiswa extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            "status" => true,
            "messages" => "Pengembalian indeks",
            "data" => $mahasiswa
        ], 200);
    }

    public function add(Request $req)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->id = $req->id;
        $mahasiswa->nim = $req->nim;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->telp = $req->telp;
        $mahasiswa->email = $req->email;
        $mahasiswa->tmp_lahir = $req->tmp_lahir;
        $mahasiswa->tgl_lahir = $req->tgl_lahir;
        $mahasiswa->alamat = $req->alamat;
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Mahasiswa',
            'data' => $mahasiswa
        ], 200);
    }
    public function update(request $req)
    {
        $mahasiswa = Mahasiswa::find($req->id);
        $mahasiswa->nim = $req->nim;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->nama = $req->nama;
        $result = $mahasiswa->save();
        if ($result) {
            return ["Data " . $req->id . " telah diubah"];
        } else {
            return ["Data " . $req->id . " tidak bisa diubah"];
        }
    }
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $result = $mahasiswa->delete();
        if ($result) {
            return ["Data " . $id . " telah dihapus"];
        } else {
            return ["Data " . $id . " tidak bisa dihapus"];
        }
    }
}
