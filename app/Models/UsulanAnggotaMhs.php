<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanAnggotaMhs extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_anggota_mhs';
    protected $primaryKey = 'anggota_mhs_id';
    protected $fillable = [
        'anggota_mhs_id',
        "usulan_id",
        "mhs_id"
    ];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class,'mhs_id','mhs_id');
    }
}
