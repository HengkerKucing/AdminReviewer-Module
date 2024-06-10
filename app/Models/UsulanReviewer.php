<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanReviewer extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $table = "trx_usulan_reviewer";
    protected $primaryKey = "usulan_reviewer_id"; // primary key;
    protected $fillable = [
        'tahap_review_id', // tambahkan tahap_review_id ke fillable
        'dosen_id', // forgein key,
        'usulan_id', // forgein key,
        'reviewer_urutan',
        'reviewer_komentar'
    ];
    public function usulan()
    {
        return $this->belongsTo(UsulanPenelitian::class, 'usulan_id');
    }

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'usulan_id');
    }

    public function anggotaMahasiswa()
    {
        return $this->hasMany(UsulanAnggotaMhs::class, 'usulan_id', 'usulan_id');
    }

    public function tahapReview()
    {
        return $this->belongsTo (RefTahapReview::class,'tahap_review_id');
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'dosen_id', 'dosen_id');
    }
}