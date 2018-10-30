 <header class="navbar-abs nav-style-2">

  <nav class="navbar navbar-expand-lg markesia-nav absolute-nav" style="position: fixed; background: white;top: 0;     box-shadow: 0 0 60px rgba(0,0,0,.15); ">

      <div class="container">
        <a class="navbar-brand" href="{{url('./')}}" style="width: 150px">
          <img src="{{asset('images/logo-widget.png')}}" class="img-fluid" alt="Apoxy Media logo" >
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="menu-item active"><a href="{{url('./')}}">Home</a></li>
        <li class="menu-item"><a href="{{url('services')}}">Services</a></li>
        <li class="menu-item"><a href="{{url('advert')}}">Advertisers</a></li>
        <li class="menu-item dropdown"> 
          <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Company</a>
            <ul  class="dropdown-menu">
              <li class="menu-item"><a href="{{url('career')}}">Careers</a></li>
              
              <li class="menu-item"><a href="{{url('about')}}">About Us</a></li>
              
            </ul>
          </li>
          <li class="menu-item"><a href="{{url('blog')}}">Blog</a></li>
          <li class="menu-item  dropdown nav-button">
            <a href="{{url('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
