<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi untuk index
    function index() {
        $supplier = Supplier::get(['supplier_id','name','address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
    }
    function create() {
        // echo"telo";
        //url supplier/create 
        return view('supplier.create');
     }
    function store(Request $request) 
    {
        //echo "jatimiko";
        $txtId = $request->input('txt_id');
        $txtNama = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        echo $txtId." </br>
             ".$txtNama." </br>
             ".$txtAddress;
        Supplier::create([
            'supplier_id' => $txtId,
            'name' => $txtNama,
            'address' => $txtAddress
        ]);

        return redirect('/Supplier');
    }
}
