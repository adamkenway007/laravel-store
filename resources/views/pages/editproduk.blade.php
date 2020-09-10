@extends('layouts.app')

@section('title')
	Edit
@endsection

@section('content')
 <div class="container">
 <div class="card-deck mb-3">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Produk</h4>
      </div>
      <div class="card-body">
      	{{Form::hidden('id', $produk->id)}}
       {{-- <form action="{{url('/simpanproduk')}}" method="POST" class="form-horizontal"> --}}
	   {!!Form::open(['action' => 'PagesController@updateproduk', 'method' => 'POST', 'class' => 'form-horizontal'])!!}
	   {{ csrf_field() }}
	   {{Form::hidden('id', $produk->id)}}
	  <div class="form-group">
	    {{-- <label for="nama_produk">Produk</label> --}}
	    {{Form::label('nama_produk', 'Nama Produk')}}
	    {{Form::text('nama_produk', $produk->nama_produk, ['placeholder' => 'Nama Produk', 'class' => 'form-control', 'id' => 'harga_produk', 'required'])}}
	    {{-- <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" id="nama_produk" required> --}}
	  </div>
	  <div class="form-group">
	    {{-- <label for="harga_produk">Harga</label> --}}
	    {{Form::label('harga_produk', 'Harga Produk')}}
	    {{Form::number('harga_produk', $produk->harga_produk, ['placeholder' => 'Harga Produk', 'class' => 'form-control', 'id' => 'harga_produk', 'required'])}}
	    {{-- <input type="number" placeholder="Harga Produk" class="form-control" name="harga_produk" id="harga_produk" required> --}}
	  </div>
	  <div class="form-group">
	    {{-- <label for="deskripsi_produk">Deskripsi</label> --}}
	    {{Form::label('deskripsi_produk', 'Deskripsi Produk')}}
	    {{Form::textarea('deskripsi_produk', $produk->deskripsi_produk,['placeholder' => 'Deskripsi Produk', 'class' => 'form-control', 
	    'id' => 'harga produk', 'cols' => '10', 'rows' => '10', 'required'])}}
	    {{-- <textarea type="text" cols="30" rows="10" class="form-control" name="deskripsi_produk" id="deskripsi_produk" required></textarea> --}}
	  </div>
	  {{-- <button type="submit" class="btn btn-primary">Tambah Produk</button> --}}
	  {{Form::submit('Update Produk', ['class' => 'btn btn-primary'])}}
	{!!Form::close()!!}
	{{-- </form> --}}
      </div>
    </div>
    </div>
    </div>
@endsection