  <!-- JavaScript Bundle with Popper -->
  <div class="container ">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

          {{-- link bootstrap.js to action  --}}
          <script src="{{ asset('public/assets/js/bootstrap.min.js') }}" ></script>
        {{-- link style.css to disegn header tamplate --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.min.css') }}"rel="stylesheet">
          <p class="col-md-4 mb-0 text-muted">&copy; جميع الحقوق محفوظه {{date('Y')}}</p>
          <a href="{{ route('home') }}"
              class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <img id="bot"src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"width="40"
                  height="32" />
          </a>
          <ul class="nav col-md-4 justify-content-end">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">الرئيسيه</a></li>
              {{-- <li class="nav-item"><a href="{{ route('skech') }}" class="nav-link px-2 text-muted">skech</a></li> --}}
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">الخصوصيه</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">اسئله</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">حول</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
              {{-- <li class="nav-item"><a href="{{ route('dash.dashboard') }}" class="nav-link px-2 text-muted">admin</a></li> --}}
          </ul>
      </div>
  </div>
