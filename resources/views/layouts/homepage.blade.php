<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sistem Maklumat Pelajar Siswazah SOFTAM(SIMPSIS)</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom1.css">

    @livewireStyles
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
 
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    @include('user.navbar1')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('user.banner')
    <!-- Banner Ends Here -->

    <!-- Banner Ends Here -->
    
    @include('user.footer')
    
    @stack('modals')

    @livewireScripts
    <!-- Bootstrap core JavaScript -->
   @include('user.script')
  </body>
</html>
