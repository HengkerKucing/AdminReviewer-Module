<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanPendanaan extends Model
{
    use HasFactory;
    public $table = 'trx_usulan_dana';
    public $primaryKey = 'usulan_dana_id';
    protected $fillable = [
        'usulan_dana_id',
        'usulan_id',
        'pendanaan_id',
        'pendanaan_value'
    ];

    public function pendanaan()
    {
        return $this->belongsTo(Pendanaan::class, 'pendanaan_id');
    }
}
