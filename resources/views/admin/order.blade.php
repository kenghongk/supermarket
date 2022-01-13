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
              <th> Customer Name </th>
              <th> Shop </th>
              <th> Tell No </th>
              <th> Address </th>
              <th> Product Name </th>
              <th> Price </th>
              <th> Quantity </th>
              <th> Status </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($order as $orders)
              <td>{{$orders->name}}</td>
              <td>{{$orders->shop_id}}</td>
              <td>{{$orders->phone}}</td>
              <td>{{$orders->address}}</td>
              <td>{{$orders->product_name}}</td>
              <td>{{$orders->price}}</td>
              <td>{{$orders->quantity}}</td>
              <td>{{$orders->status}}</td>
              <td><a class="btn btn-primary" href="{{url('orderstatus', $orders->id)}}">Update</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
