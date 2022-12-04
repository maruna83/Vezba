<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
  
    @yield('css')
    
      </head>
​
    <body>
   
    @include('admin/Pages/Components/NavBar')
    
      <div class="container-fluid p-0">
         <div class="wrapper">
               @yield('content')               
         </div>
      </div>

   
​   @yield('script')
   </body>    
</html>