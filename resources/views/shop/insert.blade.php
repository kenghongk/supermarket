@extends('layouts.admin')

@section('content-wrapper')
<div class="page-header">
  <h3 class="page-title"> Create Shop </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Forms</a></li>
     <li class="breadcrumb-item active" aria-current="page">Create Shop</li>
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
  <div class="col-12 grid-margin stretch-card" style="width: 700px;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Shop Form</h4>
        <p class="card-description mb-3"> Shop Details </p>
        <form class="form-sample" action="{{url('uploadshop')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="shop_name">Shop Name</label>
            <input type="text" class="form-control" name="shop_name" placeholder="Shop Name" style="background-color: grey" required>
          </div>

          <div class="form-group">
            <label for="address">Address 1</label>
            <input type="text" class="form-control" name="address1" placeholder="Address Shop" style="background-color: grey;" required></textarea>
          </div>

          <div class="form-group">
            <label for="address">Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Address Shop" style="background-color: grey;" required>
          </div>

          <div class="form-group">
            <label for="address">City</label>
            <input type="text" class="form-control" name="city" placeholder="City" style="background-color: grey; width: 300px;" required>
          </div>

          <div class="form-group">
            <label for="address">State</label>
            <input type="text" class="form-control" name="state" placeholder="State" style="background-color: grey; width: 300px;" required>
          </div>

          <div class="form-group">
            <label for="address">Postcode</label>
            <input type="text" class="form-control" name="postcode" placeholder="Postcode" style="background-color: grey; width: 300px;" required>
          </div>



          <div class="form-group mb-8">
            <label for="tel_no">Phone Number</label>
            <input type="text" class="form-control" name="tel_no" placeholder="Phone Shop" style="background-color: grey; width: 300px;" required>
          </div>

          <div class="form-group">
            <label>Shop Logo</label>
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