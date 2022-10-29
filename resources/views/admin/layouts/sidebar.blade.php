 <body>
     <!doctype html>
     <html lang="ar" dir="rtl">

     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="">
         <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
         <meta name="generator" content="Hugo 0.104.2">
         <title> لوحة القيادة </title>
         {{-- <script src="https://kit.fontawesome.com/d1dd6f0a6f.js" crossorigin="anonymous"></script> --}}

         <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard-rtl/">
     </head>

     <body>
         <div class="row">
             <nav id="sidebarMenu">
                 <div class="position-sticky pt-3 sidebar-sticky">
                     <ul class="nav flex-column nav-link">
                         <li class="nav-item">
                             <a class="nav-link text-light" aria-current="page" href="{{ route('dashboard') }}">
                                 <i class="fa-solid fa-house" ></i>
                                 {{-- لوحة التحكم --}}
                             </a>
                             
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('index') }} ">
                                 <i class="fa-solid fa-layer-group"></i>
                                 {{-- المقالات --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('button') }}">
                                 <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                 <i class="fa-regular fa-heart"></i>
                                 {{-- الازرار --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('cards') }}">
                                 <span data-feather="users" class="align-text-bottom"></span>
                                 <i class="fa-regular fa-credit-card"></i>
                                 {{-- البطاقات --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('colors') }}">

                                 <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                 <i class="fa-solid fa-palette"></i>
                                 {{-- الالوان --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href=" {{ route('border') }}">
                                 <span data-feather="layers" class="align-text-bottom"></span>
                                 <i class="fa-regular fa-object-ungroup"></i>

                                 {{-- الحدود --}}
                             </a>
                         </li>
                     </ul>

                     <ul class="nav flex-column nav-link">
                         <li class="nav-item">
                             <a class="nav-link text-light" href=" {{ route('other') }}">
                                 <span data-feather="file-text" class="nav-link"></span>
                                 <i  class="fa-solid fa-plus"></i>
                                 {{-- اخرى --}}
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('animation') }}">
                                 <span data-feather="file-text" class="align-text-bottom"></span>
                                 <i class="fa-solid fa-feather-pointed"></i>
                                 {{-- انيميشن --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{ route('charts') }}">
                                 <span data-feather="file-text" class="align-text-bottom"></span>
                                 <i class="fa-solid fa-eye"></i>
                                {{-- المشاهدات --}}
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-light" href="{{route('options')}}">
                                 <i class="fa-solid fa-gear"></i>
                                 {{-- الاعدادات --}}
                             </a>
                         </li>

                     </ul>
             </nav>
         </div>
     </body>

     </html>
