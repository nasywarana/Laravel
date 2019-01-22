<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //nama tabel
    protected $table = 'supplier';

    public $timestamps = false;
    //attribut
    protected $fillable = [
        'supplier_id',
        'name',
        'address'
    ];
    
}
