<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asessment_user_data extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nomor_wa',
        'kota',
        'umur',
        'created_at',
        'updated_at'
    ];
}
