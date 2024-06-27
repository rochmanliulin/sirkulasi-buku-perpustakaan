<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'nilai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'th_ajaran',
        'semester',
        'nbi',
        'kode_mk',
        'nilai',
    ];
    public function mata_kuliah(){
        return $this->belongsTo(mata_kuliah::class, 'kode_mk', 'kode_mk');
    }
    public function laporan(){
        return $this->belongsTo(laporan::class, 'nbi', 'nbi');
    }
}
