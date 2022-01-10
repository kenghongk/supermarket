@extends('layouts.customer')

@section('content')
<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Shop</h2>
        </div>
      </div>

<section class="products mb-5">
  <div class="row">
    @foreach ($shops as $shop)
    <div class="col-md-3 mb-3">
      <div class="card2 shadow">
        <div class="card-body text-center">
          <a href="{{url('viewshop', $shop->id)}}"><img src="/shopimage/{{$shop->shop_img}}" alt=""></a>
        </div>
        <div class="mb-1">
          <a class="btn btn-primary" style="margin-left: 70px; margin-bottom: 5px;" href="{{url('shopdetails', $shop->id)}}">Details</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<hr>
<div class="col-md-12">
  <div class="section-heading">
    <h2>Latest Products</h2>
    <a href="{{url('catalog')}}">view all products <i class="fa fa-angle-right"></i></a>
  </div>
</div>
  <section class="products mb-5">
    <div class="row">
          @foreach ($data as $product)
          <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">
                  <a href="#"><img src="/productimage/{{$product->product_img}}" class="img-fluid"></a>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <h5><strong>{{ $product->product_name }}</strong> </h5>
                      <h5>RM {{$product->price}}</h5>
                    </div>
                  </div>
                  <div class="row mt-2 md-2">
                    <div class="col-md-12">
                      <div class="mb-1 text-center">
                        <a class="btn btn-primary"  href="{{url('productdetails', $product->id)}}">Details</a>
                      </div>
                      <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $product->id }}" name="id">
                  <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                  <input type="hidden" value="{{ $product->shop_id }}" name="shop_id">
                  <input type="hidden" value="{{ $product->price }}" name="price">
                  <input type="hidden" value="{{ $product->product_img }}"  name="product_img">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-success mb-1">Add To Cart</button>
              </form>
      
                    </div>
                  </div>
                </div>
            </div>
          </div>
          @endforeach 
    </div>
  </section>
                
</div>
                <div class="d-flex justify-content-center">

                  {!! $data->links() !!}

                </div>
  </div>
</div>

@endsection