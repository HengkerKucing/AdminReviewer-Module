<?php

namespace App\Models;
use App\Models\Skema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaFile extends Model
{

    protected $table = "trx_skema_file";

    public function id()
    {
        return $this->belongsTo(Menu::class, 'skema_file_id');
    }

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

