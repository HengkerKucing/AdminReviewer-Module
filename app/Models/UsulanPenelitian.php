<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanPenelitian extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'trx_usulan';
    protected $primaryKey = 'usulan_id';

    // Menghubungkan dengan Skema
    public function skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id'); 
    }

    // Menghubungkan dengan Anggota (Dosen + Mahasiswa)
    public function anggotaDosen()
    {
        return $this->hasMany(UsulanAnggotaDosen::class, 'usulan_id');
    }
    public function anggotaDosenLuar()
    {
        return $this->hasMany(UsulanAnggotaDosenLuar::class, 'usulan_id');
    }
    public function anggotaMahasiswa()
    {
        return $this->hasMany(UsulanAnggotaMhs::class, 'usulan_id');
    }

    // Menghubungkan dengan Tahap Review
    public function tahapReview()
    {
        return $this->belongsTo(RefTahapReview::class,'usulan_id', 'tahap_review_id');
    }

    // Menghubungkan dengan Luaran (Wajib + Tambahan) + Iku
    public function usulanLuaranWajib()
    {
        return $this->hasMany(UsulanLuaranWajib::class, 'usulan_id');
    }
    public function usulanLuaranTambahan()
    {
        return $this->hasMany(UsulanLuaranTambahan::class, 'usulan_id');
    }
    public function usulanIKU()
    {
        return $this->hasMany(UsulanIKU::class, 'usulan_id');
    }

    // Menghubungkan dengan Program Studi (Dosen + Mahasiswa)
    public function prodiDosen()
    {
        return $this->belongsTo(RefProdi::class, 'usulan_id', 'dosen_id', 'prodi_id');
    }
    public function prodiMahasiswa()
    {
        return $this->belongsTo(RefProdi::class, 'usulan_id', 'mhs_id', 'prodi_id');
    }

    // Menghubungkan dengan Skema Pendanaan
    public function usulanPendanaan()
    {
        return $this->hasMany(UsulanPendanaan::class, 'usulan_id');
    }

    // Menghubungkan dengan Skema File
    public function usulanFile()
    {
        return $this->hasMany(UsulanFile::class, 'usulan_id');
    }
}
