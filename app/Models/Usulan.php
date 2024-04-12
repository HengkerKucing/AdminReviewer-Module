<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "trx_usulan";

    public function id()
    {
        return $this->belongsTo(Menu::class, 'trx_usulan_id');
    }
}
