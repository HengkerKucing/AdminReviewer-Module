<?php

namespace App\Models;

use App\Models\Skema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaFileModel extends Model
{
    use HasFactory;

    protected $table = "trx_skema_file";
    protected $primaryKey = 'skema_file_id';
    protected $foregnkey = 'trx_skema_id';

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    protected $fillable = [
        'skema_file_id',
        'trx_skema_id',
        'file_key',
        'file_caption',
        'file_accepted_type',
        'file_template',
        'is_required',
        'is_report',
        'is_active',
        'created_at',
    ];
}