<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //nama tabel
    protected $table = 'employee';

    //default laravel
    protected $primaryKey = 'employee_id';

    public $timestamps = false;
    //attribut
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_address',
        'employee_phone_number'
    ];
    
}
