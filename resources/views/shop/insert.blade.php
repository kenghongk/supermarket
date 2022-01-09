

<!DOCTYPE html>
<html lang="en">
  <head>
    <-- CSS--->
    @include('admin.css')

    <style type="text/css">
    .title
    {
      color: white; 
      padding-top: 25px; 
      font-size: 25px;  
    }
    label
    {
      display: inline-block;
      width: 250px;

    }
  
    </style>

  </head>
  <body style="background-color: rgb(1, 4, 15)">
   
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
      
        <!-- body -->
        <div class="container-fluid page-body-wrapper">
          
        <div class="container" align="center">
        <h1 class="title mb-4"><strong>Create New Shop</strong></h1>
        <hr style="width: 600px">

        @if(session()->has('message'))

        <div class="alert alert-success" style="width: 350px">
          {{session()->get('message')}}

        <button type="button" class="close" data-dismiss="alert" align="right">x</button>

        

        </div>

        @endif

        <form action="{{url('uploadshop')}}" method="post" enctype="multipart/form-data">

          @csrf

        <div style="padding:15px;">
        <label>Shop Name</label>
        <input style="color:black; width: 250px;" type="text" name="shop_name" placeholder="Product Name" required >
        </div>

        <div style="padding:15px;">
        <label>Address</label>
        <input style="color:black; width: 250px; height:150px;" type="text" name="address" placeholder="Address" rows="4" required>
        </div>


        <div style="padding:15px;">
        <label>Phone Number</label>
        <input style="color:black; width: 250px;" type="number" name="tel_no" placeholder="Tell Phone" required>
        </div>

        <div style="padding:15px; margin-left:80px;">
        <label>Shop Logo</label>
        <input type="file" name="file">
        </div>
        <hr style="width: 600px">

        <div style="padding:15px;">
        <input class="btn btn-success" type="submit">
        </div>
        </form>

    </div>

          <!-- body -->
       @include('admin.script')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <!-- End custom js for this page -->
  </body>
</html>
