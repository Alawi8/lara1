<div>
    <nav id="heading" class="navbar fixed-top shadow navbar-expand-lg ">
        <!-- Facebook -->
        <div class="container-fluid">
            <a href="{{ route('home') }}" title="الرئيسيه">
                <img id="myImage" src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40" alt="re"
                     />
                
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item h5">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'text-primary' : '' }}"
                            title="الرئيسية">
                            {{ __('الرئيسية') }}
                        </a>
                    </li>
                    <li class="nav-item h5">
                        <a href="{{ route('categories.index') }}"
                            class="nav-link {{ Request::is('categories*') ? 'text-primary' : '' }}" title="التصنيفات">
                            {{ __('التصنيفات') }}
                        </a>
                    </li>

                    {{-- @livewire('pages-list') --}}
                    @if (isset($pages))
                        @foreach ($pages as $item)
                            <li class="nav-item h5">
                                <a href="{{ route('page.show', ['title' => $item->title]) }}"
                                    class="nav-link {{ Request::is('page/' . $item->title) ? 'text-primary' : '' }}"
                                    title="{{ $item->title }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    @endif

                </ul>
{{-- 
                <form class="d-lg-flex" action="{{ route('search') }}" method="POST">
                    @csrf
                    <input name="query" class="form-control " type="search" aria-label="Search" placeholder="search">
                </form> --}}

                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">

                            <a class="btn btn-primary rounded-5" href="{{ route('login') }}">الدخول</a>
                        </li>
                    @else
                        <li class="nav-item dropdown  text-right">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle ml-5" style="right: 20px;" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- @guest --}}

                                @auth
                                    @if (Auth::user()->isAdmin())
                                        <a href="{{ URL('admin/posts') }}" class="dropdown-item">التحكم</a>
                                        <a href="{{ route('settings.index') }}" class="dropdown-item">الاعدادات</a>
                                        <a href="{{ route('posts.create') }}" class="dropdown-item">اضافة مقاله</a>
                                        <a href="{{ route('sitemap') }}" class="dropdown-item">ارشفة المقالات</a>
                                    @else
                                    @endif
                                @endauth
                                {{-- @endguest --}}
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div>
