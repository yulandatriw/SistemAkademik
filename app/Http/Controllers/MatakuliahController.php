<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view("backend.matakuliah.index")->with(['matakuliah' => $data]);
    }
    public function tampil()
    {
        $data = Matakuliah::all();
        return view("backend.user.akademik")->with(['matakuliah' => $data]);
    }
    public function add()
    {
        return view("backend.matakuliah.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'idmakul' => 'required',

        ]);

        $inserting = matakuliah::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($idmakul)
    {
        try {
            $data = matakuliah::findOrFail($idmakul);
            return view("backend.matakuliah.update")->with(['matakuliah' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $idmakul)
    {
        $request->validate([
            'idmakul' => 'required',

        ]);

        $process = Matakuliah::findOrFail($idmakul)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($idmakul)
    {
        try {
            $process = Matakuliah::findOrFail($idmakul)->delete();
            if ($process) {
                return redirect()->back()->with("success", "Data berhasil dihapus");
            } else {
                return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
            }
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
