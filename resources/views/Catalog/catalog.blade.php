<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
  </head>
<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->
<!-- Header -->
<header class="">
  @include('user.navbar')
</header>
<div class="shopuser header-text">
  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Productstest</h2>
            <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf
              <input type="submit" Value="Search" class="btn btn-success">
              <input class="form-control" type="search" name="search" placeholder="Search">

              
            </form>
          </div>
        </div>

     
        @foreach ($data as $product)
            
        <div class="col-md-4">
          <div class="product-item" style="shadow; position: relative">
            <a href="#"><img height="60" width="50" src="/productimage/{{$product->product_img}}"></a>
            <div class="down-content">
              <a href="#"><h4 style="text-align: left">{{$product->product_name}}</h4></a>
              <h6>RM {{$product->price}}</h6>
              <form action="" method="post" style="text-align: left">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="">
                <br>
              <input align="left" style="background-color: #4CAF50;" class="btn btn-success" type="submit" value="Add Cart">
              </form>
            </div>
          </div>
        </div>
        
        @endforeach

        @if(method_exists($data,'links'))

        <div class="d-flex justify-content-center">

          {!! $data->links() !!}


        </div>
        @endif

      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  @include('user.footer')

  <!-- Bootstrap core JavaScript -->
 @include('user.script')

</body>

</html>