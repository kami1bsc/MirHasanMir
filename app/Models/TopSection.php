<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSection extends Model
{
    use HasFactory;

    protected $table = "top_sections";

    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id', 'id');
    }
}
