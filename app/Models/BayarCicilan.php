<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarCicilan extends Model
{
    use HasFactory;
    protected $table = 'bayar_cicilans';
    protected $primaryKey = 'kode_cicilan';
    public $incrementing = false;
    protected $keyType = 'string';

    public function kredit()
    {
    	return $this->belongsTo(Kredit::class, 'kode_kredit');
    }
}
