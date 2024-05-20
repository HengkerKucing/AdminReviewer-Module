<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "ref_dosen";
    protected $primaryKey = 'dosen_id';
    protected $fillable = [
        "dosen_id",
        "dosen_nama",
        "dosen_gelar_belakang",
        "dosen_nama_lengkap",
        "dosen_nidn"
    ];
}
