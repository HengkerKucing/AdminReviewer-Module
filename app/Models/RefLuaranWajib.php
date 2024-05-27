<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefLuaranWajib extends Model
{
    use HasFactory;
    protected $table = 'ref_luaran_wajib';
    protected $primaryKey = 'luaran_wajib_id';
    protected $fillable = [
        'luaran_wajib_id',
        'luaran_wajib_nama',
        'luaran_wajib_deskripsi',
        'luaran_wajib_slug',
        'is_aktif'
    ];
}
