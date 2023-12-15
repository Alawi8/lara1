<div class="container ">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

        {{-- link style.css to disegn header tamplate --}}
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        
        <p class="col-md-4 mb-0 text-muted">&copy; جميع الحقوق محفوظه {{ date('Y') }}</p>
        <a href="{{ route('home') }}"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img id="bot"src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"
                width="40" height="32" alt="{{ config('app.name') }}" />
        </a>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted ">الرئيسية</a></li>
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted ">الخصوصية</a></li>
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted ">أسئلة</a></li>
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted ">حول</a></li>
            {{-- Add more navigation items as needed --}}
        </ul>
    </div>
</div>
