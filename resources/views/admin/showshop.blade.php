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

        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

                @if(session()->has('message'))

                <div class="alert alert-success" style="width: 350px">
                  {{session()->get('message')}}
        
                <button type="button" class="close" data-dismiss="alert" align="right">x</button>
        
                
        
                </div>
        
                @endif

                <h1 class="title mb-4"><strong>Update Shop</strong></h1>
                <hr style="width: 600px">

                <table>
                    <tr style="background-color: grey;">
                        <td style="padding:20px;">Shop Name</td>
                        <td style="padding:20px;">Address</td>
                        <td style="padding:20px;">Tell No</td>
                        <td style="padding:20px;">Logo Image</td>
                        <td style="padding:20px;">Update</td>
                        <td style="padding:20px;">Delete</td>
                    </tr>

                    @foreach ($data as $shop)
                        
                    

                    <tr align="center" style="background-color: black;">
                        <td>{{$shop->shop_name}}</td>
                        <td>{{$shop->address}}</td>
                        <td>{{$shop->tel_no}}</td>
                        <td><img height="100" width="100" src="/shopimage/{{$shop->shop_img}}"></td>

                        <td>
                            <a class="btn btn-primary" href="{{url('updateviewshop', $shop->id)}}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('deleteshop',$shop->id)}}">Delete</a>
                        </td>
                    </tr>

                    
                    @endforeach
                </table>

            </div>
        </div>


          <!-- body -->
       @include('admin.script')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <!-- End custom js for this page -->
  </body>
</html>
