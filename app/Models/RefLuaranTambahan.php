<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefLuaranTambahan extends Model
{
    use HasFactory;
    protected $table = 'ref_luaran_tambahan';
    protected $primaryKey = 'luaran_tambahan_id';
}
