<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skema extends Model
{
    use HasFactory;
    
    protected $table = "trx_skema";
    protected $primaryKey = 'trx_skema_id';

    /**
     * fillable
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'trx_skema_id',
        'trx_skema_nama',
        'trx_skema_kode',
        'jenis_skema_id',
        'periode_tahun',
        'proposal_max_upload',
        'revisi_proposal_max_upload',
        'laporan_kemajuan__max_upload',
        'laporan_akhir__max_upload',
        'is_active',
    ];

    // Definisikan relasi bahwa satu Skema memiliki banyak SkemaFile
    public function skemaFiles()
    {
        return $this->hasMany(SkemaFileModel::class, 'trx_skema_id');
    }
    public function skemaSettings()
    {
        return $this->hasMany(SkemaSettingModel::class, 'trx_skema_id');
    }
    public function Pendanaans()
    {
        return $this->hasMany(Pendanaan::class, 'trx_skema_id');
    }
}
