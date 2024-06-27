<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nbi',
        'nama'
    ];
}
