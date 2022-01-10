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
            <h2>{{ $shops->name}}}</h2>
           
          </div>
        </div>

     
        @foreach ($product as $product)
            
        <div class="col-md-3">
          <div class="product-item" style="shadow; position: relative">
            <a href="#"><img height="60" width="50" src="/productimage/{{$product->product_img}}"></a>
            <div class="down-content">
              <a href="#"><h4 style="text-align: left">{{$product->product_name}}</h4></a>
              <h6>RM {{$product->price}}</h6>
              <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                        <input type="hidden" value="{{ $product->shop_id }}" name="shop_id">
                         <input type="hidden" value="{{ $product->description }}" name="description">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->product_img }}"  name="product_img">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-success">Add To Cart</button>
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