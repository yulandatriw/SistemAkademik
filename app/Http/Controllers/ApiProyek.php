<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ApiProyek extends Controller
{
    //
    public function index()
    {
        $proyek = Proyek::all();
        return response()->json([
            "status" =>  true,
            "messages" => "Pengembalian indeks",
            "data" => $proyek
        ], 200);
    }
    //api untuk menambahkan data
    public function add(Request $req)
    {
        $proyek = new Proyek;
        $proyek->id = $req->id;
        $proyek->nama = $req->nama;
        $proyek->anggaran = $req->anggaran;
        $proyek->lokasi = $req->lokasi;
        $result = $proyek->save();
        if ($result) {
            return ["data berhasil ditambahkan"];
        } else {
            return ["data gagal ditambahkan"];
        }
    }
    public function show($id)
    {
        $proyek = Proyek::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Proyek',
            'data' => $proyek
        ], 200);
    }
    public function update(Request $req)
    {
        $proyek = Proyek::find($req->id);
        $proyek->nama = $req->nama;
        $proyek->anggaran = $req->anggaran;
        $proyek->lokasi = $req->lokasi;
        $result = $proyek->save();
        if ($result) {
            return ["Data " . $req->id . " telah diubah"];
        } else {
            return ["Data " . $req->id . " tidak bisa diubah"];
        }
    }
    public function delete($id)
    {
        $proyek = Proyek::find($id);
        $result = $proyek->delete();
        if ($result) {
            return ["Data " . $id . " telah dihapus"];
        } else {

            return ["Data " . $id . " tidak bisa dihapus"];
        }
    }
}
