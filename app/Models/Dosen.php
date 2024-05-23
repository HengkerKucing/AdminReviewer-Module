<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'ref_dosen';
    public $incrementing = false;
    protected $primaryKey = 'dosen_id';
    protected $fillable = [
        'dosen_id',
        'dosen_nama',
        'dosen_gelar_depan',
        'dosen_gelar_belakang',
        'dosen_nama_lengkap',
        'dosen_nidn',
        'dosen_nik',
        'dosen_sinta_id',
        'dosen_email_polines',
        'prodi_id',
        'jabfung_id',
        'pendidikan_id',
        'api_json_data',
        'is_active',
    ];

    public function prodi()
    {
        return $this->belongsTo(RefProdi::class, 'prodi_id');
    }
}
