<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view("backend.mahasiswa.index")->with(['mahasiswa' => $data]);
    }

    public function add()
    {
        return view("backend.mahasiswa.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            // 'nim' => 'required',
            // 'nama' => 'required',

        ]);

        $inserting = mahasiswa::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($nim)
    {
        try {
            $data = mahasiswa::findOrFail($nim);
            return view("backend.mahasiswa.update")->with(['mahasiswa' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',

        ]);

        $process = Mahasiswa::findOrFail($nim)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($nim)
    {
        try {
            $process = Mahasiswa::findOrFail($nim)->delete();
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
