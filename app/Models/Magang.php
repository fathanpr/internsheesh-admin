<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $table = 'magangs';
    protected $fillable = [
        'nama_instansi',
        'alamat',
        'posisi',
        'pendaftaran_buka',
        'pendaftaran_tutup',
        'durasi',
        'status',
        'benefit',
        'keterangan'
    ];
}
