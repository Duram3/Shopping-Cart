@extends('layouts/master')
@section('title')
Laravel Shopping Cart
@endsection()

@section('content')
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $products)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ $products->imagePath }}" alt="...">
            <div class="caption">
              <h3>{{ $products->title }}</h3>
              <p class="description">{{ $products->description }}</p>
              <div class="pull-left price">{{ $products->price }}</div>
                  <a href="{{ route('product.addToCart', ['id' => $products->id]) }}" class="btn btn-success pull-right">Buy</a>
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection
