@extends('layouts.admin')
<base href="/public">
@section('content-wrapper')
<div class="page-header">
  <h3 class="page-title"> Update Products </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#"> Product </a></li>
     <li class="breadcrumb-item active" aria-current="page">Update Product</li>
    </ol>
  </nav>
</div>


@if(session()->has('message'))
<div class="alert alert-success" style="width: 350px">
  {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" align="right">x</button>
</div>
@endif
    
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Product</h4>
        <p class="card-description mb-3"> Product Details </p>
        <form class="form-sample" action="{{url('updateshop', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="product_name">Shop Name</label>
            <input type="text" class="form-control" name="shop_name" value="{{$data->shop_name}}" style="background-color: grey" required>
          </div>

          <div class="form-group">
            <label for="description">Address</label>
            <input type="text" class="form-control" name="address" value="{{$data->address}}" style="background-color: grey" required>
          </div>

          <div class="form-group">
            <label for="description">Tell No</label>
            <input type="text" class="form-control" name="tel_no" value="{{$data->tel_no}}" style="background-color: grey" required>
          </div>

          <div class="form-group">
            <label for="price">Current Image </label>
            <img height="300" width="300" src="/shopimage/{{$data->shop_img}}">
            </div>
          
            <div class="form-group">
              <label>Product Image</label>
              <input type="file" name="file" class="file-upload-default">
              <input type="file" name="file">
            </div>
            <hr style="width: 100%" class="mb-4">
            
            <button type="submit" class="btn btn-primary me-2">Shop</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection