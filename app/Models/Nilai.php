<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'nilai';
    //protected $fillable = ['nip'];
    protected $guarded = [];
    public function join($columns = ['*'])
    {
        $this::table('nilai')
            ->join('tahunajaran', 'kelas.idkelas', '=', 'tahunajaran.idthnajar')
            ->join('matakuliah', 'kelas.idkelas', '=', 'matakuliah.idmakul')
            ->select('kelas.namakelas', 'tahunajaran.ket', 'matakuliah.namamakul')
            ->get();
    }
    public function mahasiswa()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Mahasiswa', 'nim', 'nim');
    }
    public function matakuliah()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Matakuliah', 'idmakul', 'idmakul');
    }
    public function kelas()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Kelas', 'idkelas', 'idkelas');
    }
    public function tahunajar()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\TahunAjar', 'idthnajar', 'idthnajar');
    }

    // public function pekerjaproyek()
    // {
    //     // $this->relationsType("Model","Foreign_key","Local_key");
    //     return $this->hasMany('App\Models\PekerjaProyek', 'nim', 'nim');
    // }
}
