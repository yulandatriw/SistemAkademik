<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ApiNilai extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return response()->json([
            "status" => true,
            "messages" => "Pengembalian indeks",
            "data" => $nilai
        ], 200);
    }

    public function add(Request $req)
    {
        $nilai = new Nilai;
        $nilai->id = $req->id;
        $nilai->nim = $req->nim;
        $nilai->idmakul = $req->idmakul;
        $nilai->idthnajar = $req->idthnajar;
        $nilai->idkelas = $req->idkelas;
        $nilai->uk1 = $req->uk1;
        $nilai->uk2 = $req->uk2;
        $nilai->uts = $req->uts;
        $nilai->uas = $req->uas;
    }

    public function show($idnilai)
    {
        $nilai = Nilai::findOrFail($idnilai);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Mahasiswa',
            'data' => $nilai
        ], 200);
    }
    public function update(request $req)
    {
        $nilai = Nilai::find($req->idnilai);
        $nilai->id = $req->id;
        $nilai->nim = $req->nim;
        $nilai->idmakul = $req->idmakul;
        $nilai->idthnajar = $req->idthnajar;
        $nilai->idkelas = $req->idkelas;
        $nilai->uk1 = $req->uk1;
        $nilai->uk2 = $req->uk2;
        $nilai->uts = $req->uts;
        $nilai->uas = $req->uas;
        $result = $nilai->save();
        if ($result) {
            return ["Data " . $req->idnilai . " telah diubah"];
        } else {
            return ["Data " . $req->idnilai . " tidak bisa diubah"];
        }
    }
    public function delete($idnilai)
    {
        $nilai = Nilai::find($idnilai);
        $result = $nilai->delete();
        if ($result) {
            return ["Data " . $idnilai . " telah dihapus"];
        } else {
            return ["Data " . $idnilai . " tidak bisa dihapus"];
        }
    }
}
