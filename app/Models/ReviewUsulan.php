<?php

namespace App\Models;

use App\Models\Skema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewUsulan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "ref_kriteria_penilaian"; // trx_usulan_reviewer > ref_kriteria_penilaian via ref_tahap_reviewer

    protected $primaryKey = 'kriteria_id';

    protected $fillable =
        [
            'kriteria_id',
            'tahap_review_id',
            'kriteria_nama',
            'kriteria_keterangan',
            'kriteria_bobot'
        ];

    public function nilai()
    {
        return $this->hasOne(ReviewUsulanNilai::class, 'kriteria_id');
    }

    public function usulan()
    {
        return $this->belongsTo(UsulanPenelitian::class, 'usulan_id', 'usulan_id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'dosen_id');
    }

    // public function komentar()
    // {
    //     return $this->hasOne()
    // }
}
