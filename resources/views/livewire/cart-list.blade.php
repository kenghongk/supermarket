
<div style="font-family: monaco">
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
    <h3 class="text-3xl text-bold">
        
       {{ Cart::getTotalQuantity()}} Item In Your Shopping Cart 
    </h3>
    <br>
    <hr>
    <div class="flex-1">
       <table class="w-full text-sm lg:text-base"  cellspacing="0" >
          <thead>
            <tr  class=" uppercase text-left" style="font-size: 20px">
              <th ></th>
              <th >Product</th>
              <th>
                <span class="lg:hidden" title="Quantity">Qtd</span>
                <span class=" lg:inline">Quantity</span>
              </th>
              <th class="text-center">Total</th>
            </tr>
          </thead>
          <tbody >
              @foreach ($cartItems as $item)
            <tr>
              <td >
                  <a href="#" class="btn btn-danger" wire:click.prevent="removeCart('{{$item['id']}}')">x</a>    
              </td>
              <td >
                <div class="row">
                <div class="col-4 ">
                  <a href="#">
                  <img src="/productimage/{{$item['attributes']['image'] }}" class="w-40 rounded" alt="Thumbnail">
                </a>
                </div>
                <div class="col-8 text-left ">
                <p class="uppercase text-bold" style="font-size: 15px">{{ $item['name'] }}</p> 
                <p >RM {{ $item['price'] }}/unit</p> 
                <p >From shop : {{$item['attributes']['shop_id'] }}</p>
                </div>
              </td>
              
              <td >
                <div >
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>

              <td class="text-center" style="font-size: 20px">
                <span >
                    RM {{Cart::get($item['id'])->getPriceSum()}}
                </span>
              </td>
              
            </tr>
            @endforeach
             
          </tbody>
        </table>
        <hr>
        <div class="text-3xl text-bold">
         Grand Total: RM{{ Cart::getTotal() }}
        </div>
        <div class="mt-5">
            <a href="#" class="btn btn-danger"
            wire:click.prevent="clearAllCart">Remove All Cart</a>
            <a href="#" class="btn btn-success">Checkout</a>
        </div>
      </div>
</div>

