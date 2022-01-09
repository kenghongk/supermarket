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
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Shop Form</h4>
        <p class="card-description mb-3"> Details Details </p>
        <form class="form-sample" action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
          @csrf

        <div style="padding:15px;">
        <label>Product Name</label>
        <input style="color:black; width: 250px;" type="text" name="product_name" placeholder="Product Name" required >
        </div>

        <div style="padding:15px;">
        <label>Description</label>
        <input style="color:black; width: 250px; height:150px;" type="text" name="description" placeholder="Product Description" rows="4" required>
        </div>

        <div style="padding:15px;">
          <label>Category</label>
          <select name="category" style="color:black; width: 250px;">
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
              <label>Product Image</label>
              <input type="file" name="file" class="file-upload-default">
              <input type="file" name="file">
            </div>
            <hr style="width: 100%" class="mb-4">
            
            <button type="submit" class="btn btn-primary me-2">Create</button>
            <button class="btn btn-dark">Cancel</button>
        </form>

    </div>

          <!-- body -->
       @include('admin.script')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <!-- End custom js for this page -->
  </body>
</html>
