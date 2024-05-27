<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanIKU extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_iku';
    protected $fillable = [
        'usulan_id',
        'iku_id',
        'iku_realisasi',
        'iku_bukti',
    ];
    
    public function iku()
    {
        return $this->belongsTo(RefIKU::class, 'iku_id');
    }
}
