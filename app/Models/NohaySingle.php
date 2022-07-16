<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NohaySingle extends Model
{
    use HasFactory;

    protected $table = "nohay_singles";

    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id', 'id');
    }
}
