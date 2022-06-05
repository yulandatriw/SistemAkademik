<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'idmakul';
    protected $table = 'matakuliah';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public function nilai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Nilai', 'idmakul', 'idmakul');
    }
    public function ampumakul()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Ampumakul', 'idmakul', 'idmakul');
    }
}
