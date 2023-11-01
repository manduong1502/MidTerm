@extends('index')

@section('content')
    <div class="col-lg-4 col-sm-6">
        <div class="product-item">
            <div class="pi-pic">
                <img src="{{ asset('Template/image/product/' . $product->image) }}" alt="{{ $product->name }}" style="width: 300px">
                
            </div>
            <div class="pi-text">
                <div class="catagory-name">Towel</div>
                <h5>{{ $product->name }}</h5>
                <div class="product-price">{{ $product->unit_price }}</div>
            </div>
        </div>
    </div>
@endsection
