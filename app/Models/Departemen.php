<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $table = 'departemen';
    //protected $guarded = ['id'];

    public function pegawai() 
    {
        // $this->relationsType("Model","Foreign_key","Local_key")
        return $this->hasMany('App\Models\Pegawai','id_dept','id');
    }    
}
