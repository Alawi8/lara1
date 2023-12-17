<div class="container ">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

        {{-- link style.css to disegn header tamplate --}}
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        {{-- <script>
              document.onreadystatechange = function () {
        if (document.readyState === "complete") {
            // انتظر لفترة زمنية قصيرة وثم قم بإخفاء شريط التقدم
            setTimeout(function () {
                document.getElementById("myProgressBar").style.width = "100%";
            }, 1);

            setTimeout(function () {
                document.getElementById("myProgressBar").style.display = "none";
            }, 100);
        }
    };
    
        </script> --}}
        <script>
            window.addEventListener('load', function () {
                document.getElementById('myProgressBar').style.display = 'none';
                // انتظر حتى يكتمل تحميل الصفحة
                setTimeout(function () {
                    // بمجرد الانتهاء، قم بتعيين السمة display إلى 'block' لإظهار الصورة
                    document.getElementById('myImage').style.display = 'block';
        
                    // أخفي الـ Spinner
                    document.getElementById('myProgressBar').style.display = 'none';
                }, 10); // مثال: انتظر لمدة 5 ثواني لتوقف التنفيذ وتظهر التأثير
            });
        </script>
        <p class="col-md-4 mb-0 text-muted">&copy;2018-{{ date('Y') }} 
        <br>
        {{config('app.name')}}
        </p>
        <a href="{{ route('home') }}"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img id="bot"src="{{asset('public/assets/img/bitmap.png')}}"
                width="40" height="40" alt="{{ config('app.name') }}" />
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
