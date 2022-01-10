<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
    @livewireStyles
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
                    <div class="flex flex-col w-70% p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      
                        <livewire:cart-list />
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

  @livewireScripts
</body>

</html>