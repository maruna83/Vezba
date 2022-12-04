<!DOCTYPE html>
<html lang="rs">
<head>
   
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