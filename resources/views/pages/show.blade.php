@extends('layouts.app')

@section('title')
	Services
@endsection

@section('content')
<main role="main" class="container">  
  <div class="jumbotron">
    <hr class="my-4">
      <div class="well">
    	<h1>{{$produk->nama_produk}}</a></h1>
    	<h3>Rp. {{$produk->harga_produk}}.00</h3>
    	<p>{{$produk->deskripsi_produk}}</p>
    	<h4>{{$produk->created_at}}</h4>
    	<hr>
      </div>
  </div>
</main>
@endsection