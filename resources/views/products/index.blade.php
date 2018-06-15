@extends('main-layout')


@section('content')
    <h2>Products</h2>
    @include('products/_form')
    <div class="row card-header">
        <div class="col">Name</div>
        <div class="col">Quantity</div>
        <div class="col">Price</div>
        <div class="col">Total value($)</div>
    </div>
    <hr/>
    @foreach($products as $product)
        <div class="row">
            <div class="col">{{$product->name}}</div>
            <div class="col">{{$product->quantity}}</div>
            <div class="col">{{$product->price}}</div>
            <div class="col">{{$product->price * $product->quantity}}</div>
        </div>
    @endforeach
@endsection
