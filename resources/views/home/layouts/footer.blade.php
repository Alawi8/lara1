

    <footer class=" border-top"
        style="background: linear-gradient(to bottom, #ffffff 0%, #f6f6f6 , #e9e7e7 , #000 100%);">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        
        <div class="container-fluid">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a href="{{ route('home') }}" class="col-md-4 " title="الرئيسيه">
                            <img id="bot"src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                                alt="{{ config('app.name') }}" />
                        </a>

                        <p>
                            مشكاة هي مدونة تقنية، تهدف إلى تقديم الدعم في مجال انظمة الويب ، لجميع المهتمين ورواد الاعمال ، لتكون على اطلاع مستمر لاتنسى متابعة حساباتنا على مواقع التواصل .
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">الصفحات</h6>
                        <ul class="nav-item">
                            @livewire('pages-list')
                        </ul>

                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">التواصل</h6>
                        <p><i class="fas fa-home mr-3"></i>saudi arabia , makkah</p>
                        <p><i class="fas fa-envelope mr-3"></i>support@meshcah.net</p>
                        <p><i class="fas fa-phone mr-3"></i> +966567707868</p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold"
                            title="روابط وسائل التواصل الاجتماعي - {{ config('app.name') }}"> التواصل الاجتماعي</h6>
                        <!-- Twitter -->
                        <a class="btn btn-floating m-1 shadow" style="background-color: #fff"
                            href="https://twitter.com/alo0o0o01" title="رابط حساب منصة x " role="button"><i
                                class="fa-brands fa-x-twitter"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-floating m-1 shadow" style="background-color: #fff" href="https://www.instagram.com/meshcah2/"
                            title="رابط حساب انستقرام" role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <!-- Github -->
                        <a class="btn btn-floating m-1 shadow" style="background-color: #fff" href="https://t.me/webArabic1"
                            title="رابط حساب telegram" role="button"><i class="fa-brands fa-telegram"></i></a>
                        <!-- Whatsapp -->
                        <a class="btn btn-floating m-1  shadow" style="background-color: #fff" href="https://chat.whatsapp.com/BSzG215opvWBP8b4yorJeo"
                            title="رابط حساب واتساب" role="button"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3 text-light">
            جميع الحقوق محفوظة © 2018-{{ date('Y') }}
        </div>
        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                    id="bd-theme"
                    type="button"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    aria-label="Toggle theme (auto)">
              <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
              <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                  Auto
                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
              </li>
            </ul>
          </div>
    </footer>
