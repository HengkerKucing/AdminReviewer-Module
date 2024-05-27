<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'ref_mahasiswa';
    public $incrementing = false;
    protected $primaryKey = 'mhs_id';
    protected $fillable = [
        'mhs_id',
        "mhs_nama",
        "prodi_id",
        "json_data"
    ];

    public function prodi()
    {
        return $this->belongsTo(RefProdi::class, 'prodi_id');
    }
}
