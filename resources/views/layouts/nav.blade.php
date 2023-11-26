<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="active" href="{{ url('home') }}">Home</a></li>
      <li><a href="{{ url('about') }}">About</a></li>
    <li><a href="{{ url('resume') }}">Resume</a></li>
      <li><a href="services.html">Services</a></li> 
      <li><a href="{{url ('project') }}">Portfolio</a></li>
      <li><a href="{{ route('contact.index') }}">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>