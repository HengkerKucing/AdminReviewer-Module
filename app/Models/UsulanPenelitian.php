<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanPenelitian extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "trx_usulan";

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

    public function anggotaMahasiswa()
    {
        return $this->hasMany(UsulanAnggotaMhs::class, 'usulan_id');
    }

    // Menghubungkan dengan Tahap Review
    public function tahapReview()
    {
        return $this->belongsTo(RefTahapReview::class,'usulan_id', 'tahap_review_id');
    }
}
