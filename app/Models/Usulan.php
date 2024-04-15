<?php

namespace App\Models;

use App\Models\Skema;
use App\Models\Status;
use App\Models\UsulanStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "trx_usulan";

    public function id()
    {
        return $this->belongsTo(Menu::class, 'usulan_id');
    }

    // Menghubungkan dengan Skema
    public function trx_skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    // Menghubungkan dengan Status (belom jadi)
    public function trx_usulan_status()
    {
        return $this->belongsToMany(UsulanStatus::class, 'usulan_status_id');
    }
    // public function status()
    // {
    //     return $this->belongsTo(Status::class, 'status_id')->using(UsulanStatus::class);
    // }
    // public function statuses()
    // {
    //     return $this->belongsToMany(Status::class, 'trx_usulan_status', 'usulan_id', 'status_id')
    //                 ->using(UsulanStatus::class);
    // }
}
