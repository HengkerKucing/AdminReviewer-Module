<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'ref_status';
    protected $primaryKey = 'status_id';
    protected $fillable = [
        'status_nama',
        'status_color',
    ];
}
