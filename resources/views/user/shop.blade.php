<div class="latest-products">
<div class="container select-shop">
    <div class="row">
    <div class="col-md-12">
        <div class="section-heading">
          <h2>Shops</h2>
          <a href="products.html">view all shops <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    <div class="row mt-1">

        @foreach ($shops as $shop)
            
        <div class="col-md-3">
        <a href="{{url('viewshop', $shop->id)}}">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
            <img class="img-fluid" src="/shopimage/{{$shop->shop_img}}" alt="">
          </a>
                </div>
             </div>
          </div>
        @endforeach
</div>
    </div>
</div>