<?php

namespace App\Http\Controllers;

use App\Models\TahunAjar;
use App\Models\Kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::all();
        return view("backend.kelas.index")->with(['kelas' => $data]);
    }

    public function add()
    {
        $data = Kelas::all();
        $data2 = TahunAjar::all();
        return view(
            "backend.kelas.add",
            ['kelas' => $data],
            ['thnajar' => $data2],
        );
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'idkelas' => 'required',

        ]);

        $inserting = kelas::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($idkelas)
    {
        try {
            $data = kelas::findOrFail($idkelas);
            return view("backend.kelas.update")->with(['kelas' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $idkelas)
    {
        $request->validate([
            'idkelas' => 'required',

        ]);

        $process = Kelas::findOrFail($idkelas)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($idkelas)
    {
        try {
            $process = Kelas::findOrFail($idkelas)->delete();
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
