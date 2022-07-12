<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = "videos";

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // protected $casts = [
    //     'category_id' => 'string',
    // ];
}
