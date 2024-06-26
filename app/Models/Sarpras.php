<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarpras extends Model
{
    use HasFactory;
    protected $table = 'sarpras';
    protected $fillable = [
        'nama_sarpras',
        'deskripsi',
        'gambar',
    ];
}
