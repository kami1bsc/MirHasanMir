<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajlisUpdate extends Model
{
    use HasFactory;

    protected $table = "majlis_updates";

    protected $hidden = [
        'created_at',
        'updated_at',
    ];   
}
