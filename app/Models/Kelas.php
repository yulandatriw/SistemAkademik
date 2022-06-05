<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $primaryKey = 'idkelas';
    protected $table = 'kelas';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public function ampumakul()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Ampumakul', 'idkelas', 'idkelas');
    }
    public function nilai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Nilai', 'idkelas', 'idkelas');
    }
}
