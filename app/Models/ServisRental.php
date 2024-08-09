<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisRental extends Model
{
    use HasFactory;

    protected $table = 'm_service';

    protected $fillable = [
        'nama_service',
        'upah_supir',
        'deskripsi_servis'
    ];
}
