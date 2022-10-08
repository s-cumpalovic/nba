<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand text-danger bg-warning p-2 font-weight-bold font-italic" href="#">NBA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          @if (auth()->check())
              <p class="mt-2 text-warning font-weight-bold">Welcome, {{ auth()->user()->name }}</p>
              <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
          @else
              <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/login">Login<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/register">Register<span class="sr-only">(current)</span></a>
              </li>
          @endif
        </ul>

      </div>
    </nav>
  </header>