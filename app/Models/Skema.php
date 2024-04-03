<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "trx_skema";

    public function id()
    {
        return $this->belongsTo(Menu::class, 'trx_skema_id');
    }
}
