<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
    @livewireStyles
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
            <h2>Your Cart</h2>
          </div>
          <div class="flex-1">
     <table class="table">
       
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($cartItems as $item)
                                <tr>
                                    

                                
                                    <td scope="row">{{$item->name}}</td>
                                    <td>
                                      
                                     RM {{Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}
                                    </td>
                                    <td>
                                      <form action="{{route('cart.update', $item->id)}}">
                                        <input name="quantity" type="number" value="{{$item->quantity}}">
                                      <input type="submit" value="save" style="background-color: green">
                                      </form>
                                      
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-danger"> X <i
                                                class="pe-7s-close"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h1 class="text-right">Total Price test:RM {{Cart::session(auth()->id())->getTotal()}}</h1>

                        <a href="#" class="btn btn-primary" role='button'>Proceed to checkout</a>
                        </div>
 

     
        
</div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  @include('user.footer')

  <!-- Bootstrap core JavaScript -->
 @include('user.script')
 @livewireScripts
</body>

</html>