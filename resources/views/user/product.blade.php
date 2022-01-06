<div class="latest-products">
    <div class="container select-shop">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

     
        @foreach ($data as $product)
            
        <div class="col-md-3">
          <div class="product-item">
            <a href="#"><img height="200" width=100" src="/productimage/{{$product->product_img}}" class="img-fluid"></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->product_name}}</h4></a>
              <h6>{{$product->price}}</h6>
              <p>{{$product->description}}</p>
            </div>
          </div>
        </div>
        
        @endforeach

        <div class="d-flex justify-content-center">

          {!! $data->links() !!}


        </div>

      </div>
    </div>
  </div>