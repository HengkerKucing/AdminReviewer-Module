<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanAnggotaDosen extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_anggota_dosen';
    protected $primaryKey = 'anggota_dosen_id';
    protected $fillable = [
        'anggota_dosen_id',
        'usulan_id',
        'dosen_id',
        'is_ketua',
        'is_verified'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
