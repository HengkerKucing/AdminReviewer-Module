<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanAnggotaDosenLuar extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_anggota_dosen_luar';
    protected $primaryKey = 'anggota_dosen_id';
}
