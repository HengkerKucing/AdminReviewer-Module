<?php

namespace App\Models;

use App\Models\Skema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "trx_usulan";

    // Menghubungkan dengan Skema
    public function skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    // // Menghubungkan dengan Anggota Dosen
    // public function anggotas()
    // {
    //     return $this->hasMany(AnggotaDosen::class, 'anggota_dosen_id');
    // }

    // // Menghubungkan dengan Status
    // public function statuses()
    // {
    //     return $this->hasMany(Status::class, 'usulan_status_id');
    // }
}
