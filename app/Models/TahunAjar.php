<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjar extends Model
{
    use HasFactory;

    protected $primaryKey = 'idthnajar';
    protected $table = 'tahunajaran';
    //protected $fillable = ['nip'];
    protected $guarded = [];
    public function nilai()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->hasMany('App\Models\Nilai', 'idthnajar', 'idthnajar');
    }
}
