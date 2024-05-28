<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanLuaranTambahan extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_luaran_tambahan';
    protected $fillable = [
        'usulan_id',
        'luaran_tambahan_id',
        'luaran_tambahan_target',
        'luaran_tambahan_realisasi'
    ];

    public function luaranTambahan()
    {
        return $this->belongsTo(RefLuaranTambahan::class, 'luaran_tambahan_id');
    }
}
