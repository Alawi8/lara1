    <div class="">

        <!-- Scripts -->
        <script>
            window.addEventListener('load', function() {
                document.getElementById('myProgressBar').style.display = 'none';
                // انتظر حتى يكتمل تحميل الصفحة
                setTimeout(function() {
                    // بمجرد الانتهاء، قم بتعيين السمة display إلى 'block' لإظهار الصورة
                    document.getElementById('myImage').style.display = 'block';

                    // أخفي الـ Spinner
                    document.getElementById('myProgressBar').style.display = 'none';
                }, 10); // مثال: انتظر لمدة 5 ثواني لتوقف التنفيذ وتظهر التأثير
            });
        </script>

    </div>

    <footer class=" border-top"
        style="background: linear-gradient(to bottom, #ffffff 0%, #f6f6f6 , #e9e7e7 , #000 100%);">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <div class="container">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a href="{{ route('home') }}" class="col-md-4 ">
                            <img id="bot"src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                                alt="{{ config('app.name') }}" />
                        </a>

                        <p>
                            مشكاه هي منصة تقنية . تتميز بتقديم مجموعة واسعة من
                            الخدمات والأدوات التي تساعد مطوري الويب ورواد الأعمال على تحقيق أهدافهم باسهل الطرق.
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">الصفحات</h6>
                        <p>
                            @foreach ($page as $item)
                                <p class="nav-item">
                                    <a href="{{ route('page.show', ['title' => $item->title]) }}"
                                        class="nav-link px-2 text-muted">{{ $item->title }}</a>
                                </p>
                            @endforeach
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">التواصل</h6>
                        <p><i class="fas fa-home mr-3"></i>السعوديه ، الرياض</p>
                        <p><i class="fas fa-envelope mr-3"></i>support@meshcah.net</p>
                        <p><i class="fas fa-phone mr-3"></i> +966567707868</p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold"> التواصل الاجتماعي</h6>
                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #000000" href="#!"
                            role="button"><i class="fa-brands fa-x-twitter"></i>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                            <!-- Whatsapp -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #25d366" href="#!"
                                role="button"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3 text-light">
            جميع الحقوق محفوظة © 2018-{{ date('Y') }}
        </div>
    </footer>
