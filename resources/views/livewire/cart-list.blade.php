<div>
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
    <h3 class="text-3xl text-bold">
        
       Total {{ Cart::getTotalQuantity()}} Cart 
    </h3>
    <div class="flex-1">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
          <thead>
            <tr class="h-12 uppercase">
              <th class=" md:table-cell"></th>
              <th class="text-center">Name</th>
              <th class="text-center">Vendor</th>
              <th class="pl-5 text-center lg:text-right lg:pl-0">
                <span class="lg:hidden" title="Quantity">Qtd</span>
                <span class="hidden lg:inline">Quantity</span>
              </th>
              <th class="hidden text-center md:table-cell"> price</th>
              <th class="hidden text-center md:table-cell"> Remove </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($cartItems as $item)
            <tr>
              <td class=" pb-4 md:table-cell">
                <a href="#">
                  <img src="{{ $item['attributes']['image'] }}" class="w-20 rounded" alt="Thumbnail">
                </a>
              </td>
              <td>
                <a href="#">
                  <p class="text-center mb-2 md:ml-4">{{ $item['name'] }}</p> 
                </a>
              </td>
              <td><p class="mb-2 md:ml-4"></p> </td>
              <td class="justify-center mt-6 md:justify-end md:flex">
                <div class="h-10 w-28">
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>
              <td class="hidden text-right md:table-cell">
                <span class="text-sm font-medium lg:text-base">
                    ${{ $item['price'] }}
                </span>
              </td>
              <td class=" text-right md:table-cell">
                  <a href="#" class="btn btn-danger" wire:click.prevent="removeCart('{{$item['id']}}')">x</a>    
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
        <div>
         Total: ${{ Cart::getTotal() }}
        </div>
        <div class="mt-5">
            <a href="#" class="btn btn-danger"
            wire:click.prevent="clearAllCart">Remove All Cart</a>
            <a href="#" class="btn btn-success">Checkout</a>
        </div>

      </div>
</div>