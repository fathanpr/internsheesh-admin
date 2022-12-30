<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    use HasFactory;
    protected $table = 'kaprodis';
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nidn',
        'no_telp',
        'tanggal_lahir',
        'alamat'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
