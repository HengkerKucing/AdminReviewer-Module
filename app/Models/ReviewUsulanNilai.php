<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewUsulanNilai extends Model
{
    use HasFactory;

    protected $table = 'trx_usulan_reviewer_nilai';
    protected $primaryKey = 'reviewer_nilai_id'; // Kolom primary key
    public $timestamps = false; // Tidak menggunakan kolom timestamps

    protected $fillable = [
        'usulan_reviewer_id',
        'kriteria_id',
        'nilai',
    ];

    // Relasi ke model UsulanReviewer (jika diperlukan)
    // public function usulanReviewer()
    // {
    //     return $this->belongsTo(UsulanReviewer::class, 'usulan_reviewer_id');
    // }

    // // Relasi ke model Kriteria (jika diperlukan)
    // public function kriteria()
    // {
    //     return $this->belongsTo(Kriteria::class, 'kriteria_id');
    // }

    // // Relasi ke model Nilai (jika diperlukan)
    // public function nilai()
    // {
    //     return $this->belongsTo(Nilai::class, 'nilai_id');
    // }
}
