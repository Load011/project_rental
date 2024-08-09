<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilRental extends Model
{
    use HasFactory;

    public $table = 'm_mobil';

    public $fillable = [
        'nama_mobil',
        'jenis_mobil',
        'deskripsi_mobil',
        'foto_mobil',
        'mileage',
        'tmp_duduk',
        'bahan_bakar'
    ];

    public function harga(){
        return $this->hasOne(MobilService::class, 'car_id');
    }
}
