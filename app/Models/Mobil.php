<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';
    protected $primaryKey = 'kode_mobil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'merk',
        'type',
        'harga_mobil',
        'warna',
        'gambar',
    ];

    public function kredits()
    {
    	return $this->hasMany(Kredit::class, 'kode_mobil');
    }

    public function beli_cashes()
    {
    	return $this->hasMany(BeliCash::class, 'kode_mobil');
    }

    public function showAllData()
    {
        $data = Mobil::orderBy('created_at', 'desc')->get();
        return $data;
    }

    public function showDataId($kode_mobil)
    {
        $data = Mobil::findOrFail($kode_mobil);
        return $data;
    }

    public function store($data)
    {
        $latest = Mobil::select('kode_mobil')->latest()->first();
        $noUrut = ($latest == null) ? "1" : (int)substr($latest->kode_mobil, 7, strlen($latest->kode_mobil) - 7) + 1;
        $noUrutAfter = (Str::length($noUrut) < 3) ? str_repeat('0', 3 - Str::length($noUrut)) . $noUrut : $noUrut;
        $kode_mobil = strtoupper(substr($data->merk, 0, 3)) . date('Y') . $noUrutAfter;

        $file = $data->gambar;
        $extension = $file->getClientOriginalExtension(); //get image extention
        $filename = $kode_mobil . '.' . $extension;
        $file->move('images/cache', $filename);

        $mobil = new Mobil();
        $mobil->kode_mobil = $kode_mobil;
        $mobil->merk = $data->merk;
        $mobil->type = $data->type;
        $mobil->harga_mobil = $data->harga_mobil;
        $mobil->warna = $data->warna;
        $mobil->gambar = $filename;
        $mobil->save();

    }
}
