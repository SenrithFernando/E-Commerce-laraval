@extends('master')
@section("content")
<div class="custom-product" >
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-12" >
        <div class="trending-wrapper">
            <h4>Result for Product</h4>
            <a href="ordernow" class="btn btn-success mb-3">Order Now</a>
            @foreach ($products as $item)
            <div class="row searched-item w-100 pt-4 cart-list-devider">
                <div class="col-sm-3 col-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="w-50">

                    </a>
                </div>

                <div class="col-sm-3 col-4">

                        <div class="text-dark" style="text-decoration: none;">
                            <h2 >{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            <p>Rs.{{$item->price}}/=</p>
                        </div>

                </div>

                <div class="col-sm-3 col-4">
                    <a href="/removecart/{{$item->cart_id}}"><button class="btn btn-warning">Remove to Cart</button></a>
                </div>
            </div>

            @endforeach
        </div>
        <a href="ordernow" class="btn btn-success mx-3">Order Now</a>
    </div>
</div>
@endsection
