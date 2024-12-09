<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nilai_asessment',
        'created_at',
        'updated_at'
    ];
}
