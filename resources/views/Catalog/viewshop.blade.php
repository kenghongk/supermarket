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
  
    <div class="container p-4 select-shop">
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="section-heading">
            <h4 style="font-size: 30px;"><strong>{{ $shops->shop_name}}</strong></h4>
            <hr>
            <br>
           
          </div>
        </div>

     
        @foreach ($product as $product)
            
        <div class="col-md-3">
          <div class="product-item" style="shadow; position: relative">
            <a href="#"><img height="60" width="50" src="/productimage/{{$product->product_img}}"></a>
            <div class="down-content">
              <a href="#"><h4 style="text-align: left">{{$product->product_name}}</h4></a>
              <h6>RM {{$product->price}}</h6>
              <form action="" method="post" style="text-align: left">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="">
                <br>

                <a class="btn btn-success" href="{{route('cart.add',$product->id)}}">add to cart</a>
              </form>
            </div>
          </div>
        </div>
        
        @endforeach

        @if(method_exists($product,'links'))

        <div class="d-flex justify-content-center">

          {!! $product->links() !!}


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