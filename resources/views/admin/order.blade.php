

<!DOCTYPE html>
<html lang="en">
  <head>
    <-- CSS--->
    @include('admin.css')

  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
      
        <!-- body -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding:20px;">Customer Name</td>
                        <td style="padding:20px;">Tell No</td>
                        <td style="padding:20px;">Address</td>
                        <td style="padding:20px;">Product Name</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Status</td>
                        <td style="padding:20px;">Action</td>
                    </tr>

                    @foreach ($order as $orders)
                        

                    <tr align="center" style="background-color: rgb(0, 0, 0);">
                        <td style="padding:20px;">{{$orders->name}}</td>
                        <td style="padding:20px;">{{$orders->phone}}</td>
                        <td style="padding:20px;">{{$orders->address}}</td>
                        <td style="padding:20px;">{{$orders->product_name}}</td>
                        <td style="padding:20px;">{{$orders->price}}</td>
                        <td style="padding:20px;">{{$orders->quantity}}</td>
                        <td style="padding:20px;">{{$orders->status}}</td>
                        <td style="padding:20px;">
                        
                            <a class="btn btn-primary" href="{{url('orderstatus', $orders->id)}}">Completed</a>
                        </td>
                    </tr>

                    
                    @endforeach
                </table>
                <h1 class="title mb-4 mt-4"><strong>Completed Order</strong></h1>
                <hr style="width: 600px">
                    <table>
                        <tr style="background-color: grey;">
                            <td style="padding:20px;">Customer Name</td>
                            <td style="padding:20px;">Tell No</td>
                            <td style="padding:20px;">Address</td>
                            <td style="padding:20px;">Product Name</td>
                            <td style="padding:20px;">Price</td>
                            <td style="padding:20px;">Quantity</td>
                            <td style="padding:20px;">Status</td>
                        </tr>
    
                        @foreach ($order2 as $orders2)
                            
    
                        <tr align="center" style="background-color: rgb(0, 0, 0);">
                            <td style="padding:20px;">{{$orders2->name}}</td>
                            <td style="padding:20px;">{{$orders2->phone}}</td>
                            <td style="padding:20px;">{{$orders2->address}}</td>
                            <td style="padding:20px;">{{$orders2->product_name}}</td>
                            <td style="padding:20px;">{{$orders2->price}}</td>
                            <td style="padding:20px;">{{$orders2->quantity}}</td>
                            <td style="padding:20px;">{{$orders2->status}}</td>
                        </tr>
    
                        
                        @endforeach
                    </table>
    



            </div>
        </div>

          <!-- body -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
