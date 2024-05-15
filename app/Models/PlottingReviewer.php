<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlottingReviewer extends Model
{
    use HasFactory;
    protected $table = "trx_usulan_reviewer";
    protected $primaryKey = "usulan_reviewer_id";

    public function usulan()
    {
        return $this->belongsTo(Usulan::class, 'usulan_id');
    }

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'usulan_id');
    }

    public function usulananggotamhs()
    {
        return $this->hasMany(UsulanAnggotaMhs::class, 'usulan_id', 'usulan_id');
    }

    public function tahapreview()
    {
        return $this->belongsTo(RefTahapReview::class,'tahap_review_id');
    }
}