@extends('layouts.admin')

@section('content-wrapper')

<div class="page-header">
  <h3 class="page-title"> Manage Shop </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#"> Shop </a></li>
     <li class="breadcrumb-item active" aria-current="page">List Shop</li>
    </ol>
  </nav>
</div>

@if(session()->has('message'))
<div class="alert alert-success" style="width: 350px">
  {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" align="right">x</button>
</div>
@endif


<div class="col-lg-12 grid-margin stretch-card" style="width:fit-content;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">List Product</h4>
      <p class="card-description">List of products in the shop</code>
      </p>
      <div class="table-responsive">
        <table class="table table-bordered text-center" style="width:fit-content;">
          <thead>
            <tr>
              <th> Shop Name </th>
              <th> Address </th>
              <th> Tell No </th>
              <th> Logo Image </th>
              <th> Update </th>
              <th> Delete </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($data as $shop)
              <td>{{$shop->shop_name}}</td>
              <td>{{$shop->address1}}, {{$shop->address2}}, {{$shop->city}}, {{$shop->state}}, {{$shop->postcode}}</td>
              <td>{{$shop->tel_no}}</td>
              <td><img src="/shopimage/{{$shop->shop_img}}"></td>
              <td><a class="btn btn-primary" href="{{url('updateviewshop', $shop->id)}}">Update</a></td>
              <td><a class="btn btn-danger" href="{{url('deleteshop',$shop->id)}}">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
