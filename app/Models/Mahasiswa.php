<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama_lengkap',
        'npm',
        'tanggal_lahir',
        'no_telp',
        'prodi',
        'kelas',
        'alamat',
        'user_id'
    ];

    /**
     * Get the user that owns the Mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}