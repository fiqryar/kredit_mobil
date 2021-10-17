<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table = 'kredits';
    protected $primaryKey = 'kode_kredit';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pembeli()
    {
    	return $this->belongsTo(Pembeli::class, 'ktp_pembeli');
    }

    public function paket_kredit()
    {
    	return $this->belongsTo(PaketKredit::class, 'kode_paket');
    }

    public function mobil()
    {
    	return $this->belongsTo(Mobil::class, 'kode_mobil');
    }

    public function pembelis()
    {
    	return $this->hasMany(BayarCicilan::class, 'kode_kredit');
    }
}
