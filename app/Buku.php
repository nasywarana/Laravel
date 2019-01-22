<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //nama tabel
    protected $table = 'buku';

    public $timestamps = false;
    //attribut
    protected $fillable = [
        'buku_id',
        'nama_buku',
        'pengarang',
        'harga'
    ];
    
}
