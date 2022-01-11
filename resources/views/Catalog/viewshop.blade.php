@extends('layouts.customer')
<base href="/public">
@section('content')
<div class="container">
  <div class="row mb-2">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catalog</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
  <div class="col-md-9">
      <h2><strong>Catalog</strong></h2>
  </div>
  <div class="col-md-3">
      <div class="input-group mb-3">
        <form action="{{url('search')}}" method="get">
          @csrf
          
          <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
          <div class="input-group-prepend">
          <input type="submit" Value="Search" class="btn btn-success">
      </div>
  </div>
</div>

<section class="products mb-5">
  <div class="row mt-1">
        @foreach ($product as $product)
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
                    <div class="mb-1">
                      <a class="btn btn-primary" href="{{url('productdetails', $product->id)}}">Details</a>
                    </div>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                <input type="hidden" value="{{ $product->shop_id }}" name="shop_id">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->product_img }}"  name="product_img">
                <input type="hidden" value="{{ $product->quantity }}"  name="product_quantity">
                <input type="hidden" value="1" name="quantity">
                <button class="btn btn-success">Add To Cart</button>
            </form>
                  </div>
                </div>
              </div>
          </div>
        </div>

        @endforeach
  </div>
        @if(method_exists($product,'links'))

        <div class="d-flex justify-content-center">

          {!! $product->links() !!}

        </div>
        @endif
</section>
        
@endsection