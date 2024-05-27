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

    // Menghubungkan dengan Skema
    // public function skema()
    // {
    //     return $this->belongsTo(ReviewUsulan::class, 'ref_kriteria_penilaian');
    // }
// Menghubungkan dengan Skema
    // public function review() 
    // {
    //     return $this->belongsTo(ReviewUsulan::class, 'tahap_review_id');


    // public function reviewPerUsulan($review_usulan_id) {
    //     return $this->join('ref_tahap_review', 'ref_kriteria_penilaian.tahap_review_id', '=', 'ref_tahap_review.tahap_review_id')
    //     ->where('ref_kriteria_penilaian.tahap_review_id','=',$review_usulan_id)->get();
    // }
    // // Menghubungkan dengan Status
    // public function statuses()
    // {
    //     return $this->hasMany(Status::class, 'usulan_status_id');
    // }
}
