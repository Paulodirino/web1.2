<!doctype html>
 <html>
 <head>
 @include('product.partials.head')
 </head>
 <body>
 <div class="container-fluid">
 <div class="row">
 @include('product.partials.header')
 </div>
 <div id="main" class="row">
 @yield('content')
 </div>
 <div class="row">
 @include('product.partials.footer')
 </div>
 </div>
 </body>
 </html>