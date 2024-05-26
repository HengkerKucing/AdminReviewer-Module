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
    protected $primaryKey = 'usulan_id';
    protected $fillable = [
        "usulan_id",
        "usulan_judul",
        "usulan_abstrak",
        "usulan_pendanaan",
        "trx_skema_id",
        "is_active",
        "if_submitted",
        "created_at",
        "created_by",
        "updated_at",
        "updated_by"
    ];
    // Menghubungkan dengan Skema
    public function skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    public function usulananggotamhs()
    {
        return $this->hasMany(UsulanAnggotaMhs::class, 'usulan_id', 'usulan_id');
    }

    public function tahapreview()
    {
        return $this->hasOne(RefTahapReview::class,'tahap_review_id');
    }

    public function plottingreviewer()
    {
        return $this->hasMany(PlottingReviewer::class,'usulan_id');
    }
    // // Menghubungkan dengan Anggota Dosen

    // // Menghubungkan dengan Status
    // public function statuses()
    // {
    //     return $this->hasMany(Status::class, 'usulan_status_id');
    // }
}
