<?php

namespace App\Http\Controllers;

use Session;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
    	return view('pages.index');
    }

    public function about(){
    	return view('pages.about');
    }

    public function services(){
    	/* $produks = DB::table('produks')
    					->get(); */
        $produks = Produk::orderBy('nama_produk','asc')->paginate(3);

    	return view('pages.services')->with('produks',$produks);
    }

    public function show($id){
        // $produk = DB::table('produks')
        //             ->where('id',$id)
        //             ->first();
        $produk = Produk::find($id);

        return view('pages.show')->with('produk', $produk);
    }

    public function create(){
        return view('pages.create');
    }

    public function simpanproduk(Request $request){

        // $produk = new Produk();
        // $produk->nama_produk      = $request->nama_produk;
        // $produk->harga_produk     = $request->harga_produk;
        // $produk->deskripsi_produk = $request->deskripsi_produk;

        // $produk->save();

        $data = array();
        $data['nama_produk']      = $request->nama_produk;
        $data['harga_produk']     = $request->harga_produk;
        $data['deskripsi_produk'] = $request->deskripsi_produk;

        DB::table('produks')
            ->insert($data);

        Session::put('success', 'Produk Berhasil Ditambahkan');

        return redirect('/create');
    }
}
 