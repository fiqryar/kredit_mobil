<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
  <div class="container">
    <a class="navbar-brand t-bold" href="/">MyCar</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between align-items-center transition" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          @foreach($navbar as $item => $href)
            <a class="nav-link hover-text-primary {{ request()->is($href) ? 't-color-primary t-semibold' : ''  }}" href="{{ $href }}">{{ $item }}</a>
          @endforeach
      </div>
      <div class="navbar-nav">
          @foreach($auth as $item => $href)
            <a class="nav-link hover-text-primary {{ request()->is($href) ? 't-color-primary t-semibold' : ''  }}" href="{{ $href }}">{{ $item }}</a>
          @endforeach
      </div>
    </div>
  </div>
</nav>