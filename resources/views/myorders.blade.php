@extends('master')
@section("content")
<div class="custom-product" >
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-12" >
        <div class="trending-wrapper">
            <h4>my orders for Product</h4>

            @foreach ($orders as $item)
            <div class="row searched-item w-100 pt-4 cart-list-devider">
                <div class="col-sm-3 col-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="w-50">

                    </a>
                </div>

                <div class="col-sm-3 col-4">

                        <div class="text-dark" style="text-decoration: none;">
                            <h2>Name : {{$item->name}}</h2>
                            <p>Delivery status : {{$item->status}}</p>
                            <p>Address : {{$item->address}}</p>
                            <p>Payment Status : {{$item->payment_status}}</p>
                            <p>Payment Method : {{$item->payment_method}}</p>
                        </div>

                </div>

                <div class="col-sm-3 col-4">

                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>
@endsection
