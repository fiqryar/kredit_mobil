<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketKredit extends Model
{
    use HasFactory;
    protected $table = 'paket_kredits';
    protected $primaryKey = 'kode_paket';
    public $incrementing = false;
    protected $keyType = 'string';

    public function kredit()
    {
    	return $this->hasMany(Kredit::class, 'kode_paket');
    }
}
