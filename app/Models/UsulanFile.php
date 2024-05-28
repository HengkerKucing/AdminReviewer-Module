<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanFile extends Model
{
    use HasFactory;
    protected $table = 'trx_usulan_file';
    protected $primaryKey = 'usulan_file_id';

    public function skemaFile()
    {
        return $this->belongsTo(SkemaFileModel::class, 'skema_file_id');
    }
}
