<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthKalam extends Model
{
    use HasFactory;

    protected $table = "month_kalams";

    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id', 'id');
    }
}
