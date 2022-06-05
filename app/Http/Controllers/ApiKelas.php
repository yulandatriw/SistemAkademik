<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ApiKelas extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return response()->json([
            "status" => true,
            "messages" => "Pengembalian indeks",
            "data" => $kelas
        ], 200);
    }

    public function add(Request $req)
    {
        $kelas = new Kelas;
        $kelas->id = $req->idkelas;
        $kelas->namakelas = $req->namakelas;
        $kelas->idthnajar = $req->idthnajar;
    }

    public function show($idkelas)
    {
        $kelas = Kelas::findOrFail($idkelas);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Mahasiswa',
            'data' => $kelas
        ], 200);
    }
    public function update(request $req)
    {
        $kelas = Kelas::find($req->idkelas);
        $kelas->id = $req->idkelas;
        $kelas->namakelas = $req->namakelas;
        $kelas->idthnajar = $req->idthnajar;
        $result = $kelas->save();
        if ($result) {
            return ["Data " . $req->idkelas . " telah diubah"];
        } else {
            return ["Data " . $req->idkelas . " tidak bisa diubah"];
        }
    }
    public function delete($idkelas)
    {
        $kelas = Kelas::find($idkelas);
        $result = $kelas->delete();
        if ($result) {
            return ["Data " . $idkelas . " telah dihapus"];
        } else {
            return ["Data " . $idkelas . " tidak bisa dihapus"];
        }
    }
}
