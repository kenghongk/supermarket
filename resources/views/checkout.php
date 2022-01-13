<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
    <div class="container">
      <div class="row">
          <main class="my-8">
            <div class="container px-6 mx-6">
                <div class="flex justify-center my-6">
                    <div class="f\Cart::getContent()lex flex-col w-70% p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      
                         @foreach (\Cart::getContent() as $item)

            <tr>
              <td >
                  <a href="#" class="btn btn-danger" wire:click.prevent="removeCart('{{$item['id']}}')">x</a>    
              </td>
              <td >
                <div class="row">
                <div class="col-4 ">
                  <a href="#">
                  <img src="/productimage/{{ $item->attributes->image }}" class="w-40 rounded" alt="Thumbnail">
                </a>
                </div>
                <div class="col-8 text-left ">
                <p class="uppercase text-bold" style="font-size: 15px">{{$item->name}}</p> 
                <p >{{$item['attributes']['description'] }}</p> 
                <p >RM {{$item->price}}/unit</p> 
                <p >From shop : {{$item['attributes']['shop_id'] }}</p>
                </div>
              </td>
              
              <td >
                <div class="row">
                  <div class="flex" >
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
                <div class="row">
                  <br>
                   <p class="text-center">Only {{$item['attributes']['product_quantity'] }} unit available</p> 
                </div>
                @if ($item['quantity']>$item['attributes']['product_quantity'])
                  @php
                    $instock = 0
                  @endphp
                  <script>alert("Sorry our stock is not enough, Please decrease your quantity before Checkout ")</script>
                @endif
                    </div>
                  </div>
            </div>
        </main>
      </div>
    </div>
  </div>


  <!-- Footer -->
  @include('user.footer')

  <!-- Bootstrap core JavaScript -->
 @include('user.script')

 
</body>

</html>