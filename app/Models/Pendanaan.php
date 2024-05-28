<?php

namespace App\Models;

use App\Models\Skema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendanaan extends Model
{

    protected $table = "trx_skema_pendanaan";
    protected $primaryKey = 'pendanaan_id';

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'pendanaan_id',
        'trx_skema_id',
        'pendanaan_key',
        'pendanaan_nama',
        'pendanaan_keterangan',
        'pendanaan_persentase',
        'is_active'
    ];

    public function skema_id()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    
}

$skema_id = 1; // Ganti dengan ID skema yang diinginkan
$skema = Skema::find($skema_id);
if ($skema) {
    $skemaFiles = $skema->skemaFiles;
    // $skemaFiles berisi semua SkemaFile yang memiliki trx_skema_id yang sama dengan $skema_id
} else {
    // Handle jika skema dengan ID tertentu tidak ditemukan
}

