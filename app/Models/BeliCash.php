<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliCash extends Model
{
    use HasFactory;
    protected $table = 'beli_cashes';
    protected $primaryKey = 'kode_cash';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pembeli()
    {
    	return $this->belongsTo(Pembeli::class, 'ktp_pembeli');
    }

    public function mobil()
    {
    	return $this->belongsTo(mobil::class, 'kode_mobil');
    }
}
