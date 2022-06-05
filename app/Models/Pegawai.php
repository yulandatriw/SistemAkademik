<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'nip';
    protected $table = 'pegawai';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public function departemen()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\Departemen', 'id_dept', 'id');
    }

    public function pekerjaproyek()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\PekerjaProyek', 'nip', 'nip');
    }
}
