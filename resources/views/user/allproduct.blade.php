<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>All Products</h2>
          </div>
        </div>

        @foreach ($data as $product)
            
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->product_img}}" alt=""></a>
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