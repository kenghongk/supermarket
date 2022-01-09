

<div class="section-heading">
  <h2>Your Cart</h2>
     @if ($message = Session::get('success'))
       <div class="p-4 mb-3 bg-green-100 rounded">
         <p class="text-green-800">{{ $message }}</p>
        </div>
       @endif
 </div>

          <div class="flex-1">
     <table class="table">
       
      <thead>
        <tr>
        <th>Picture</th>
        <th>Product</th>
        <th>Vendor</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
        </tr>
      </thead>
      <tbody>
              @foreach ($cartItems as $item)
            <tr>
              <td class="">
                <a href="#">
                  <img src="{{ $item['attributes']['image'] }}" class="w-20 rounded" alt="Thumbnail">
                </a>
              </td>
              <td>
                <a href="#">
                  <p class="mb-2 md:ml-4">{{ $item['name'] }}</p> 
                </a>
              </td>
               <td><p class="mb-2 md:ml-4">{{ $item['attributes']['shop_id'] }}</p> </td>
              <td class="justify-center mt-6 md:justify-end md:flex">
                <div class="h-10 w-10">
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>
              <td class=" text-center md:table-cell">
                <span class="text-sm font-medium lg:text-base">
                    RM{{ $item['price'] }}
                </span>
              </td>
              <td class=" text-center md:table-cell">
                  <a href="#" class="btn btn-danger" wire:click.prevent="removeCart('{{$item['id']}}')">x</a>    
              </td>
            </tr>
            @endforeach             

       </tbody>
      </table>
                        <h1 class="text-right">Total Price:RM {{ Cart::getTotal() }}</h1>

                        <a href="#" class="btn btn-primary" role='button'>Proceed to checkout</a>
                        </div>
 

     
