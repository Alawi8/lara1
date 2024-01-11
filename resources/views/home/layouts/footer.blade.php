<div class="container ">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

    <!-- Scripts -->
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
            <img id="bot"src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                alt="{{ config('app.name') }}" />
        </a>
        <ul class="nav col-md-4 justify-content-end">
            @foreach ($page as $item)
                <li class="nav-item">
<!-- in your blade file -->
<a href="{{ route('page.show', ['title' => $item->title]) }}" class="nav-link px-2 text-muted">{{ $item->title }}</a>
                </li> 
            @endforeach
        </ul>
    </div>
</div>
