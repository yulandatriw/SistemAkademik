<?php

namespace App\Http\Controllers;

use App\Models\PekerjaProyek;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PekerjaProyekController extends Controller
{
    public function index()
    {
        $data = PekerjaProyek::all();
        return view("backend.pekerja_proyek.index")->with(['pekerja_proyek' => $data]);
    }

    public function add()
    {
        return view("backend.pekerja_proyek.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'id' => 'required',
            // 'nama' => 'required',

        ]);

        $inserting = PekerjaProyek::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = PekerjaProyek::findOrFail($id);
            return view("backend.pekerja_proyek.update")->with(['pekerja_proyek' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    // public function processUpdate(Request $request, $nip)
    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            // 'nik' => 'required',
            // 'nip' => 'required',
            // 'nama' => 'required',

        ]);

        $process = PekerjaProyek::findOrFail($id)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = PekerjaProyek::findOrFail($id)->delete();
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
