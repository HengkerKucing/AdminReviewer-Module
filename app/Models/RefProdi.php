<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProdi extends Model
{
    use HasFactory;
    protected $table = 'ref_prodi';
    protected $primaryKey = 'prodi_id';
}
