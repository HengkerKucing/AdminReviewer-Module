<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefTahapReview extends Model
{
    use HasFactory;
    protected $table = 'ref_tahap_review';
    protected $primaryKey = 'tahap_review_id';
    protected $fillable = [
        "tahap_review_id",
        'tahap_review_nama',
        "status_id",
    ];

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }
}
