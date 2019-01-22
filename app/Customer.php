<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //nama tabel
    protected $table = 'customer';

    //default laravel
    protected $primaryKey = 'customer_id';

    public $timestamps = false;
    //attribut
    protected $fillable = [
        'customer_id',
        'name',
        'address'
    ];
    
}
