<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "trx_skema";

    // Tentukan bahwa kolom 'trx_skema_id' adalah kunci utama
    protected $primaryKey = 'trx_skema_id';

    // Definisikan relasi bahwa satu Skema memiliki banyak SkemaFile
    public function skemaFiles()
    {
        return $this->hasMany(SkemaFile::class, 'trx_skema_id');
    }
}
