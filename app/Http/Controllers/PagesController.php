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

        $this->validate($request, ['nama_produk'       =>  'required',
                                   'harga_produk'      =>  'required',
                                   'deskripsi_produk'  =>  'required']);
        
        $produk = new Produk();
        $produk->nama_produk      = $request->input('nama_produk');
        $produk->harga_produk     = $request->harga_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;

        $produk->save();

        // $data = array();
        // $data['nama_produk']      = $request->nama_produk;
        // $data['harga_produk']     = $request->harga_produk;
        // $data['deskripsi_produk'] = $request->deskripsi_produk;

        // DB::table('produks')
        //     ->insert($data);

        Session::put('success', 'Produk Berhasil Ditambahkan');

        return redirect('/create');
    }

    public function editproduk($id){
        $produk = Produk::find($id);

        return view('pages.editproduk')->with('produk', $produk);

    }

    public function updateproduk(Request $request){
        $produk = Produk::find($request->input('id'));
        $produk->nama_produk      = $request->input('nama_produk');
        $produk->harga_produk     = $request->input('harga_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');

        $produk->update  ();

        Session::put('success', 'Produk '.$request->input('nama_produk'). ' Berhasil Diupdate');

        return redirect('/services');
    }

    public function hapusproduk($id)
    
}
 