<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanLuaranWajib extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_luaran_wajib';
    protected $primaryKey = 'usulan_luaran_wajib_id';
    protected $fillable = [
        'usulan_luaran_wajib_id',
        'usulan_id',
        'luaran_wajib_id',
        'luaran_wajib_realisasi'
    ];

    public function luaranWajib()
    {
        return $this->belongsTo(RefLuaranWajib::class, 'luaran_wajib_id');
    }
}
