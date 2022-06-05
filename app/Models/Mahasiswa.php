<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';
    public $keyType = 'string';
    protected $table = 'mahasiswa';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public function nilai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Nilai', 'nim', 'nim');
    }

    public function kelas()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Kelas', 'idkelas', 'idkelas');
    }
}
