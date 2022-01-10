@extends('layouts.customer')
<base href="/public">
@section('content')
    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Product Details</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image shadow">
              <img src="/productimage/{{$product->product_img}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h2 style="font-size: 60px"><strong>{{$product->product_name}}</strong></h2>
              <p>{{$product->description}}</p>
              <h5 style="font-size: 30px">RM {{$product->price}}</h5>
              <h5 style="font-size: 20px; margin-top:10px;">Quantity</h5>
              <h5 style="font-size: 20px">{{$product->quantity}}</h5>
                 <div class="row mt-2 md-2">
                  <div class="col-md-12">
                   
        
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                <input type="hidden" value="{{ $product->shop_id }}" name="shop_id">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->product_img }}"  name="product_img">
                <input type="hidden" value="1" name="quantity">
                <button class="btn btn-success">Add To Cart</button>
            </form>
          
           

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
