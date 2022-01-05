

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <base href="/public">
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
  <body>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
      
        <!-- body -->
      
        <div class="container-fluid page-body-wrapper">
          
            <div class="container" align="center">
            <h1 class="title mb-4"><strong>Update Shop</strong></h1>
            <hr style="width: 600px">
    
            @if(session()->has('message'))
    
            <div class="alert alert-success" style="width: 350px">
              {{session()->get('message')}}
    
            <button type="button" class="close" data-dismiss="alert" align="right">x</button>
    
            </div>
    
            @endif
    
            <form action="{{url('updateshop', $data->id)}}" method="post" enctype="multipart/form-data">
    
              @csrf
    
            <div style="padding:15px;">
            <label>Shop Name</label>
            <input style="color:black; width: 250px;" type="text" name="shop_name" value="{{$data->shop_name}}" required >
            </div>
    
            <div style="padding:15px;">
            <label>Address</label>
            <input style="color:black; width: 250px; height:150px;" type="text" name="address" value="{{$data->address}}" rows="4" required>
            </div>
    
            <div style="padding:15px;">
            <label>Tell No</label>
            <input style="color:black; width: 250px;" type="number" name="tel_no" value="{{$data->tel_no}}" required>
            </div>
    
            <div style="padding:15px;">
                <label>Old Image</label>
                <img height="100" width="100" src="/shopimage/{{$data->shop_img}}">
            </div>
    
            <div style="padding:15px;">
            
                <label>Change The Image</label>
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

          <!-- body -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
