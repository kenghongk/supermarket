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
        <div class="container" align="center">

        @if(session()->has('message'))
        <div class="alert alert-success" style="width: 350px">
        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert" align="right">x</button>
        </div>
        @endif
        &nbsp
                
                <h1 class="title mb-4"><strong>My Orders</strong></h1>
                <hr style="width: 200px">
                &nbsp

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="background-color: grey;">
                                        <th>Tracking Number</th>
                                        <th>Total Price</th>
                                        <th>Status</th> 
                                        <th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($data as $orders)
        
    

        <tr>
            <td>{{$orders->tracking_no}}</td>
            <td>{{$orders->total_price}}</td>
            <td>{{$orders->status}}</td>
            <td>
                <a href="/checkout" class="btn btn-primary">View</a>
                <a href="{{url('delete', $orders->id)}}" class="btn btn-primary" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" >Delete</span></a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div></div></div>
  </div>
</div>

          <!-- body -->
       @include('admin.script')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <!-- End custom js for this page -->
  </body>
</html>