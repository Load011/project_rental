<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilService extends Model
{
    use HasFactory;

    protected $table = 'm_mobil_service';

    protected $fillable = [
        'car_id',
        'service_id',
        'harga_service'
    ];

    public function mobil(){
        return $this->belongsTo(MobilRental::class, 'car_id');
    }

    public function service(){
        return $this->belongsTo(ServisRental::class, 'service_id');
    }
}
