<?php

namespace App\Models;

use App\Models\Skema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaSettingModel extends Model
{
    use HasFactory;

    protected $table = "trx_skema_settings";
    protected $primaryKey = 'skema_setting_id';
    protected $foregnkey = 'trx_skema_id';

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'trx_skema_id');
    }

    protected $fillable = [
        'skema_setting_id',
        'trx_skema_id',
        'setting_key',
        'setting_label',
        'setting_type',
        'setting_value',
        'is_visible',
        'updated_at',
        'created_at'
    ];
}