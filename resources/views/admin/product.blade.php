@extends('layouts.admin')

@section('content-wrapper')
<div class="page-header">
  <h3 class="page-title"> Add Products </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#"> Forms </a></li>
     <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
  <div class="col-12 grid-margin stretch-card" style="width: 900px;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Product Form</h4>
        <p class="card-description mb-3"> Product Details </p>
        <form class="form-sample" action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Product Name" style="background-color: grey" required>
          </div>

          <div class="form-group">
            <label for="description">Product Description</label>
            <textarea class="form-control" rows="4" cols="50" name="description" placeholder="Description" style="background-color: grey; height: 10em;" required></textarea>
          </div>

         <div class="form-group">
          <label for="category">Product Category</label>
          <select class="form-control" name="category" style="background-color:grey; width: 250px;" required>
            <option value="" selected>Select</option>
            <option value=detergent>Detergent</option>
            <option value=meat>Meat</option>
            <option value=seafood>Seafood</option>
            <option value=snack>Snack</option>
            <option value=drink>Drink</option>
          </select>
          </div>

          <div class="form-group">
            <label for="price">Price RM </label>
            <input type="number" class="form-control" name="price" placeholder="Price Product" style="background-color:grey; width: 250px;" required>
            </div>

            <div class="form-group">
              <label for="quantity">Quantity </label>
              <input type="number" class="form-control" name="quantity" placeholder="Quantity Product" style="background-color:grey; width: 250px;" required>
              </div>
          
            <div class="form-group">
              <label>Product Image</label>
              <input type="file" name="file" class="file-upload-default">
              <input type="file" name="file">
            </div>
            <hr style="width: 100%" class="mb-4">
            
            <button type="submit" class="btn btn-primary me-2">Create</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
