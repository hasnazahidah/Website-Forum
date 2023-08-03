<ul>
  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
  <li><a class="nav-link scrollto" href="#">Category</a></li>
  <li><a class="nav-link" href="#">Forum</a></li>
  <!-- Authentication Links -->
  @guest
      <li><a href="{{ route('login') }}">Login</a></li>
  @else
</ul>
@endguest
<i class="bi bi-list mobile-nav-toggle"></i>
