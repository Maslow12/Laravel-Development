
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><strong>WeBlog</strong><br><small style="font-size: 10px;">We do the things better...</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("posts") }}">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
          @auth
            <form class="form-inline">
              <a class="nav-link text-danger" href="{{ url("logout") }}"><strong>Logout</strong></a>
            </form>
          @endauth
          @guest
            <form class="form-inline">
              <a class="nav-link" href="{{ url("sign-in") }}"><strong>Sign In</strong></a>
            </form>
          @endguest
        </div>
      </div>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>