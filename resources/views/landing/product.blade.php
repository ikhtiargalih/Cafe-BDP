@extends('content')

@section('content')

<style>
    .image-product {
        max-height: 200px;
        max-widht: auto;
    }
</style>

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="img_thumbnail">
            <img class="image-product" src="{{ $product->image }}" alt="">
            <div class="caption">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
                <p><strong>Price: </strong> {{ $product->price }}$</p>
                <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}"
                        class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
