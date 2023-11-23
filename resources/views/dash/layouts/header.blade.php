<!DOCTYPE html>
<html lang="ar" dir="rtl">
{{-- <script src="{{ asset('assets/js/color-modes.js') }}"></script> --}}


<header>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!--bootstrap link-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.css') }}" />
    <link href="{{ asset('assets/css/dashboard.rtl.css') }}" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>

</header>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    لوحة القيادة
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard.index') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    المقالات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    الصفحات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    الاعضاء
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings.index') }}">
                    <span data-feather="settings" class="align-text-bottom"></span>
                    الإعدادات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    التقارير
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    التصنيفات
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('photo.index') }}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    الوسائط
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('photo.index') }}">
                    <span data-feather="layers" class="align-text-bottom"></span>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('photo.index') }}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('photo.index') }}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>التقارير المحفوظة</span>
            <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    الشهر الحالي
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    الربع الأخير
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    التفاعل الإجتماعي
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    مبيعات نهاية العام
                </a>
            </li>
            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>خيارات اضافيه</span>
                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                    <span data-feather="plus-circle" class="align-text-bottom"></span>
                </a>
            </h6>
            <aside class="bd-aside sticky-xl-top text-body-secondary align-self-start mb-3 mb-xl-5 px-2">
                <nav class="small" id="toc">
                    <ul class="list-unstyled">
                        <li class="my-2">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            <button class="btn d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse"
                                aria-controls="contents-collapse">المحتوى</button>
                            <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
                                <li>
                                    <a class="page-link" href="#typography">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        النصوص</a>
                                </li>
                                <li><a class="page-link" href="#images">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        الصور</a></li>
                                <li><a class="page-link" href="#tables">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        الجداول</a></li>
                                <li><a class="page-link" href="#figures">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        النماذج البيانية</a></li>
                            </ul>
                        </li>
                        <li class="my-2">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            <button class="btn d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse"
                                aria-controls="forms-collapse">النماذج</button>
                            <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
                                <li><a class="page-link" href="#overview">نظرة عامة</a></li>
                                <li><a class="page-link" href="#disabled-forms">الحقول المعطلة</a></li>
                                <li><a class="page-link" href="#sizing">الأحجام</a></li>
                                <li><a class="page-link" href="#input-group">مجموعة الإدخال</a></li>
                                <li><a class="page-link" href="#floating-labels">الحقول ذوي العناوين العائمة</a></li>
                                <li><a class="page-link" href="#validation">التحقق</a></li>
                            </ul>
                        </li>
                        <li class="my-2">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            <button class="btn d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse"
                                aria-controls="components-collapse">مكونات</button>
                            <ul class="list-unstyled ps-3 collapse" id="components-collapse">
                                <li><a class="page-link" href="#accordion">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        المطوية</a></li>

                                <li>

                                    <a class="page-link" href="#alerts">
                                        <span data-feather="file-text" class="align-text-bottom"></span>
                                        الإنذارات</a>
                                </li>
                                <li><a class="page-link" href="#badge">الشارة</a></li>
                                <li><a class="page-link" href="#breadcrumb">مسار التنقل التفصيلي</a></li>
                                <li><a class="page-link" href="#buttons">الأزرار</a></li>
                                <li><a class="page-link" href="#button-group">مجموعة الأزرار</a></li>
                                <li><a class="page-link" href="#card">البطاقة</a></li>
                                <li><a class="page-link" href="#carousel">شرائح العرض</a></li>
                                <li><a class="page-link" href="#dropdowns">القوائم المنسدلة</a></li>
                                <li><a class="page-link" href="#list-group">مجموعة العناصر</a></li>
                                <li><a class="page-link" href="#modal">الصندوق العائم</a></li>
                                <li><a class="page-link" href="#navs">التنقل</a></li>
                                <li><a class="page-link" href="#navbar">شريط التنقل</a></li>
                                <li><a class="page-link" href="#pagination">ترقيم الصفحات</a></li>
                                <li><a class="page-link" href="#popovers">الصناديق المنبثقة</a></li>
                                <li><a class="page-link" href="#progress">شريط التقدم</a></li>
                                <li><a class="page-link" href="#scrollspy">المخطوطة</a></li>
                                <li><a class="page-link" href="#spinners">الدوائر المتحركة</a></li>
                                <li><a class="page-link" href="#toasts">الإشعارات</a></li>
                                <li><a class="page-link" href="#tooltips">التلميحات</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
        </ul>
    </div>
</nav>

<body>
    @include('dash.layouts.dashboard')
    </main>
</body>


<footer>
    @include('dash.layouts.footer')
</footer>

</html>
