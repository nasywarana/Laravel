<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    //buat fungsi baru untuk index
    function index() {
        //echo "asoy geboy";
        $buku = Buku::get(['buku_id','nama_buku','pengarang','harga']);
        //var_dump($buku);
        return view('buku.index', compact('buku'));
    }

    function create() {
       // echo"telo";
       //url buku/create 
       return view('buku.create');
    }
    
    function store(Request $request) 
    {
        //echo "jatimiko";
        $txtId = $request->input('txt_id');
        $txtNama = $request->input('txt_nama');
        $txtPengarang = $request->input('txt_pengarang');
        $txtHarga = $request->input('txt_harga');
        echo $txtId." </br>
             ".$txtNama." </br>
             ".$txtPengarang." </br>
             ".$txtHarga;
        Buku::create([
                'buku_id' => $txtId,
                'nama_buku' => $txtNama,
                'pengarang' => $txtPengarang,
                'harga' => $txtHarga
            ]);
    
            return redirect('/Buku');
        
    }
}
