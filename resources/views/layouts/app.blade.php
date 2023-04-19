<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport"
      content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token"
      content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet">
   <!--- bootstrap icons --->
   <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
      integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e"
      crossorigin="anonymous">

   <!-- Scripts -->
   @vite(['resources/css/home-app.css', 'resources/js/home-app.js'])
</head>

<body>
   <!-- Form search section -->
   @include('partials.search-section')

   <!-- Home page navbare section -->
   @include('includes.navbare')

   <!--- Home page content -->
   <div class="main">
      @yield('content')
   </div>

   <!--- Footer -->
   @include('includes.footer')
</body>

</html>
