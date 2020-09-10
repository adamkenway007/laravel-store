@extends('layouts.app')

@section('title')
	Services
@endsection

@section('content')
<main role="main" class="container">  
  <div class="jumbotron">
    <h1>Welcome to the services page</h1>
    <h2>Produk details</h2>
    <hr class="my-4">
     <div class="well">
    	 <h1>{{$produk->nama_produk}}</a></h1>
    	 <h4>Rp. {{$produk->harga_produk}}.00</h4>
    	 <p>{{$produk->deskripsi_produk}}</p>
       <hr>
    	 <h4>Written at {{$produk->created_at}}</h4>
       <hr>
       <a href="/edit/{{$produk->id}}" class="btn btn-primary">Edit</a>
       <a href="/delete/{{$produk->id}}" class="btn btn-danger">Delete</a>
     </div>
  </div>
</main>
@endsection