  <!-- JavaScript Bundle with Popper -->
  <div class="container ">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

          {{-- link style.css to disegn header tamplate --}}
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}"rel="stylesheet" >

          {{-- style bootstrap --}}
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
          {{-- link bootstrap.js to action  --}}
          <script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>


          <p class="col-md-4 mb-0 text-muted">&copy; 2022 الحقوق محفوظه</p>

          <a href="{{ route('home') }}"
              class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <img id="bot"src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"width="40"
                  height="32" />
          </a>

          <ul class="nav col-md-4 justify-content-end">
              <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="{{ route('skech') }}" class="nav-link px-2 text-muted">skech</a></li>
              <li class="nav-item"><a href="{{ route('policy') }}" class="nav-link px-2 text-muted">policy</a></li>
              <li class="nav-item"><a href="{{ route('faq') }}" class="nav-link px-2 text-muted">FAQs</a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">About</a></li>
              <li class="nav-item"><a href="{{ route('dash.dashboard') }}" class="nav-link px-2 text-muted"></a></li>
          </ul>
      </div>
  </div>
