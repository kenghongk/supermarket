@extends('layouts.subsystem')
<base href="/public">
@section('content')
    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Shop Details</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="/shopimage/{{$shop->shop_img}}" alt="">
            </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h2 style="font-size: 60px"><strong>{{$shop->shop_name}}</strong></h2>
            <h5 style="font-size: 30px">Address</h5>
            <h5 style="font-size: 25px">{{$shop->address}}</h5>
            <h5 style="font-size: 20px; margin-top: 20px;">Tell No: {{$shop->tel_no}}</h5>
               <div class="row mt-2 md-2">
                <div class="col-md-12 mt-4">
                
                <a class="btn btn-primary" href="{{url('viewshop', $shop->id)}}" style="width: 100px;">Shop</a>
              </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
