<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'proyek';
    //protected $guarded = ['id'];
    // public $incrementing = false;
    // public $keyType = 'String';

    public function pekerjaproyek()
    {
        // $this->relationsType("Model","Foreign_key","Local_key")
        return $this->hasMany('App\Models\PekerjaProyek', 'id_proyek', 'id');
    }
}
