@extends('layouts.admin')

@section('content-wrapper')


<div class="page-header">
  <h3 class="page-title"> Manage Products </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#"> Products </a></li>
     <li class="breadcrumb-item active" aria-current="page">List Products</li>
    </ol>
  </nav>
</div>

@if(session()->has('message'))
<div class="alert alert-success" style="width: 350px">
  {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" align="right">x</button>
</div>
@endif

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">List Product</h4>
      <p class="card-description">List of products in the shop</code>
      </p>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> Product Name </th>
              <th> Description </th>
              <th> Category </th>
              <th> Price </th>
              <th> Quantity </th>
              <th> Image </th>
              <th> Update </th>
              <th> Delete </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($data as $product)

              <td>{{$product->product_name}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->category}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->quantity}}</td>
              <td><img height="100" width="100" src="/productimage/{{$product->product_img}}"></td>
              <td><a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Update</a></td>
              <td><a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>
            </tr>
               @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
