@extends('layouts.app')

@section('title')
	Services
@endsection

@section('content')
<main role="main" class="container">
<h1>Welcome to the services page</h1>
@if (Session::has('success'))
  <div class="card-body">
    <div class="alert alert-success">
      {{Session::get('success')}}
      {{Session::put('success', null)}}
    </div>
  </div>
@endif  
  @foreach($produks as $produk)
  <div class="jumbotron">
    <hr class="my-4">
      <div class="well">
    	<h1><a href="/show/{{$produk->id}}">{{$produk->nama_produk}}</a></h1>
    	<h3>Rp. {{$produk->harga_produk}}.00</h3>
    	{{-- <p>{{$produk->deskripsi_produk}}</p>
    	<h4>{{$produk->created_at}}</h4>
    	<hr> --}}
      </div>
  </div>
  @endforeach
  {{$produks->links()}}
</main>
@endsection