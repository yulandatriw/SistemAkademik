<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ApiMatakuliah extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return response()->json([
            "status" => true,
            "messages" => "Pengembalian indeks",
            "data" => $matakuliah
        ], 200);
    }

    public function add(Request $req)
    {
        $matakuliah = new Matakuliah;
        $matakuliah->idmakul = $req->idmakul;
        $matakuliah->namamakul = $req->namamakul;
        $matakuliah->semester = $req->semester;
        $matakuliah->sks = $req->sks;
        $matakuliah->keterangan = $req->keterangan;
    }

    public function show($idmakul)
    {
        $matakuliah = Matakuliah::findOrFail($idmakul);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Mata Kuliah',
            'data' => $matakuliah
        ], 200);
    }
    public function update(request $req)
    {
        $matakuliah = Matakuliah::find($req->idmakul);
        $matakuliah->idmakul = $req->idmakul;
        $matakuliah->namamakul = $req->namamakul;
        $matakuliah->semester = $req->semester;
        $matakuliah->sks = $req->sks;
        $matakuliah->keterangan = $req->keterangan;
        $result = $matakuliah->save();
        if ($result) {
            return ["Data " . $req->idmakul . " telah diubah"];
        } else {
            return ["Data " . $req->idmakul . " tidak bisa diubah"];
        }
    }
    public function delete($idmakul)
    {
        $matakuliah = Matakuliah::find($idmakul);
        $result = $matakuliah->delete();
        if ($result) {
            return ["Data " . $idmakul . " telah dihapus"];
        } else {
            return ["Data " . $idmakul . " tidak bisa dihapus"];
        }
    }
}
