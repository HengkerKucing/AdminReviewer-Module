<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefLuaranWajib extends Model
{
    use HasFactory;
    protected $table = 'ref_luaran_wajib';
    protected $primaryKey = 'luaran_id';
}