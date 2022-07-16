<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManqabatSingle extends Model
{
    use HasFactory;

    protected $table = "manqabat_singles";

    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id', 'id');
    }
}
