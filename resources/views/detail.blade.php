@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="" class="w-50">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2 class="pb-3">{{$product['name']}}</h2>
            <h3>Price :{{$product['price']}}</h3>
            <h5>Detail :{{$product['description']}}</h5>
            <h5>Catagory :{{$product['category']}}</h5>

            <form action="/add_to_cart" method="POST">
                    @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary mt-2">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success mt-2 mb-2">Buy Now</button>
        </div>
    </div>
</div>
@endsection
