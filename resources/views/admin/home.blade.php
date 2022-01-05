

<!DOCTYPE html>
<html lang="en">
  <head>
    <-- CSS--->
    @include('admin.css')

  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
      
        <!-- body -->
      
        @include('admin.body')

          <!-- body -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
