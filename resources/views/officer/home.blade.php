<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('officer.css')
    </head>
  <body>
    <div class="container-scroller">

          @include('officer.sidebar')

      <div class="container-fluid page-body-wrapper">

          @include('officer.navbar')
 
         <div class="main-panel">        
<!-- officer/body.blade.php-->
    @include('officer.body')
<div class="content-wrapper">
            

          </div>
          @include('officer.footer')

        </div>
      </div>
    </div>
    @include('officer.scripts')
  </body>
</html>