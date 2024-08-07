<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 't_transaksi';

    protected $fillable = ['id_pesanan', 'id_supir', 'upah_supir'];

    public function sewa()
    {
        return $this->belongsTo(Sewa::class, 'id_pesanan');
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class, 'id_supir');
    }
}