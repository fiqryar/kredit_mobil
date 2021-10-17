<div class="container">
  <footer class="row justify-content-center justify-content-md-end py-5 my-5 border-top gy-3">
    <div class="col-lg-3 mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <h6 class="t-size-md t-semibold t-color-primary">MyCar</h6>
      </a>
      <p class="text-muted">&copy; 2019-{{ date("Y") }}</p>
    </div>

    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
      <h6 class="t-size t-color-primary t-semibold">Navigations</h6>
      <ul class="nav flex-column">
        @foreach($section1 as $item => $url)
        <li class="nav-item mb-2"><a href="{{ $url }}" class="nav-link p-0 t-color-lightgray hover-text-secondary">{{ $item }}</a></li>
        @endforeach
      </ul>
    </div>

    <div class="col-6 col-lg-2 mb-3">
    </div>

    <div class="col-6 col-lg-2 mb-3">
    </div>

    <div class="col-6 col-lg-2 mb-3">
    </div>
  </footer>
</div>