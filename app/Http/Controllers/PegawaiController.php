<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view("backend.pegawai.index")->with(['pegawai' => $data]);
    }

    public function add()
    {
        return view("backend.pegawai.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',

        ]);

        $inserting = Pegawai::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($nip)
    {
        try {
            $data = Pegawai::findOrFail($nip);
            return view("backend.pegawai.update")->with(['pegawai' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $nip)
    {
        $request->validate([
            'nik' => 'required',
            'nip' => 'required',
            'nama' => 'required',

        ]);

        $process = Pegawai::findOrFail($nip)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($nip)
    {
        try {
            $process = Pegawai::findOrFail($nip)->delete();
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
