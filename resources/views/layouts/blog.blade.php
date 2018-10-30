<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('include.header')
  <body>

  @include('include.navbar')
  
  <!-- @include('include.alert') -->
  <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
  			
  			@yield('content')  

  		   </div>
	  	   <div class="col-lg-4">

	  	   	@include('blog.sidebar') 
	  	   	
	  	   </div>
	  	</div>
	  </div>
	</div>
  @include('include.footer')
  @include('include.script')
  </body>

</html>