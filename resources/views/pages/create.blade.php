@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')
 <div class="container">
 <div class="card-deck mb-3">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
       <form action="{{url('/simpanproduk')}}" method="POST" class="form-horizontal">
	   {{ csrf_field() }} 
	  <div class="form-group">
	    <label for="nama_produk">Produk</label>
	    <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" id="nama_produk" >
	  </div>
	  <div class="form-group">
	    <label for="harga_produk">Harga</label>
	    <input type="text" placeholder="Harga Produk" class="form-control" name="harga_produk" id="harga_produk">
	  </div>
	  <div class="form-group">
	    <label for="deskripsi_produk">Deskripsi</label>
	    <textarea type="text" cols="30" rows="10" class="form-control" name="deskripsi_produk" id="deskripsi_produk"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Tambah Produk</button>
	</form>
      </div>
    </div>
    </div>
    </div>
@endsection