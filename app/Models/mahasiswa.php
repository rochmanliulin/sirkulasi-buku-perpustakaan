<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode_mk';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
    ];
    public function nilai(){
    return $this->hasMany(nilai::class);
    }
}
