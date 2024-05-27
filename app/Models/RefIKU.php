<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefIKU extends Model
{
    use HasFactory;
    protected $table = 'ref_iku';
    protected $primaryKey = 'iku_id';
}
