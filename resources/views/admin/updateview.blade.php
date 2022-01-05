

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
            <h1 class="title mb-4"><strong>Update Product</strong></h1>
            <hr style="width: 600px">
    
            @if(session()->has('message'))
    
            <div class="alert alert-success" style="width: 350px">
              {{session()->get('message')}}
    
            <button type="button" class="close" data-dismiss="alert" align="right">x</button>
    
            
    
            </div>
    
            @endif
    
            <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
    
              @csrf
    
            <div style="padding:15px;">
            <label>Product Name</label>
            <input style="color:black; width: 250px;" type="text" name="product_name" value="{{$data->product_name}}" required >
            </div>
    
            <div style="padding:15px;">
            <label>Description</label>
            <input style="color:black; width: 250px; height:150px;" type="text" name="description" value="{{$data->description}}" rows="4" required>
            </div>
    
            <div style="padding:15px;">
              <label>Category</label>
              <select name="category" style="color:black; width: 250px;">
                <option value="{{$data->category}}"" selected>Select</option>
                <option value=detergent>Detergent</option>
                <option value=meat>Meat</option>
                <option value=seafood>Seafood</option>
                <option value=snack>Snack</option>
                <option value=drink>Drink</option>
              </select>
              </div>
    
            <div style="padding:15px;">
            <label>Price</label>
            <input style="color:black; width: 250px;" type="number" name="price" value="{{$data->price}}" required>
            </div>
    
            <div style="padding:15px;">
            <label>Quantity</label>
            <input style="color:black; width: 250px;" type="number" name="quantity" value="{{$data->quantity}}" required>
            </div>

            <div style="padding:15px;">
                <label>Old Image</label>
                <img height="100" width="100" src="/productimage/{{$data->product_img}}">
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
