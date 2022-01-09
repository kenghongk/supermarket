<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.css')

  </head>

  <body>

   
    
    <!-- Header -->
   
      
      @include('user.navbar')
      
        <!-- body -->

        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
        <div class ="container mt=5">

                @if(session()->has('message'))

                <div class="alert alert-success" style="width: 350px">
                  {{session()->get('message')}}
        
                <button type="button" class="close" data-dismiss="alert" align="right">x</button>
        
                
        
                </div>
        
                @endif
                &nbsp
          <div class = "row">
            <div class="col-md-7">
              <div class="card">
                  
                <div class="card-body">
                    
                  <h6>Basic Details<h6>
                    <hr>
                    &nbsp
                    <div class="row">
                      <td>
                      <div class="col-md-6">
                      <label for="Name">Name</label>
                      <input type="display" class="form-control" value="{{ auth()->user()->name }}"></input>
                     </div>
                     <div class="col-md-6">
                      <label for="Name">Email</label>
                      <input type="display" class="form-control" " value="{{ auth()->user()->email }}"></input>
                      &nbsp
                     </div>
                     
                     <div class="col-md-6">
                      <label for="Name">Phone Number</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->phone }}"></input>
                     
                     </div>
                     <div class="col-md-6">
                      <label for="Name" class="form-label">Address 1</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->address1 }}"></input>
                      &nbsp
                     </div>
                   
                     <div class="col-md-6">
                      <label for="Name">Address 2</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->address2 }}"></input>
                     </div>
                   
                     <div class="col-md-6">
                      <label for="Name">City</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->city }}"></input>
                      &nbsp
                     </div>
                  
                     <div class="col-md-6">
                      <label for="Name">State</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->state }}"></input>
                     </div>
                  
                     <div class="col-md-6">
                      <label for="Name">Country</label>
                      <input type="display" class="form-control"  value="{{ auth()->user()->country }}"></input>
                     </div>
               
               
              </div>
             
         </div>
     </div>
     &nbsp
  </div>
 
  <div class = "row">

           <div class="col-md-5">
           <div class="card">
           <div class="card-body">
          <h6> Order Details </h6>
          <hr>
          &nbsp
          <table class="table  table-bordered">
          <tr style="background-color: grey;">
        <td style="padding:20px;">Product Name</td>
        <td style="padding:20px;">Price</td>
        <td style="padding:20px;">Quantity</td>
      
      
    </tr>
 

 
  @foreach ($data as $item_orders)
  <tr>
    
    
        <td>{{$item_orders->prod_name}}</td>
        <td>{{$item_orders->price}}</td>
        <td>{{$item_orders->qty}}</td>
  </tr>
  @endforeach

  </table>

           
       
     </div>
   </div>
   </div>
   </div>
 
  

</div>
</div>

          <!-- body -->
       @include('admin.script')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <!-- End custom js for this page -->
  </body>
</html>
