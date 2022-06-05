<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Kelas;
use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use App\Models\TahunAjar;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $data = Nilai::all();
        $data2 = Kelas::all();
        $data3 = Matakuliah::all();
        $data4 = TahunAjar::all();
        return view("backend.nilai.index", ['nilai' => $data], ['matkul' => $data3], ['kelas' => $data2]);
    }

    public function add()
    {
        $data = Kelas::all();
        $data2 = Matakuliah::all();
        $data3 = TahunAjar::all();
        return view(
            "backend.nilai.add",
            ['kelas' => $data],
            ['matkul' => $data2],
            ['thnajar' => $data3],
        );
        // $merge = [
        //     ['kelas' => $data],
        //     ['matkul' => $data2],
        //     ['thnajar' => $data3]
        // ];

        // return view(
        //     "backend.nilai.add",
        //     ['merge' => $merge]
        // );
        // return view("backend.nilai.add",$data)
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            // 'uts' => 'required',
            // 'uas' => 'required',

        ]);

        $inserting = nilai::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = nilai::findOrFail($id);
            return view("backend.nilai.update")->with(['nilai' => $data]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            'uts' => 'required',
            'uas' => 'required',

        ]);

        $process = Nilai::findOrFail($id)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = Nilai::findOrFail($id)->delete();
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
