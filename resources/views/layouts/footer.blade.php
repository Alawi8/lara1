  <!-- JavaScript Bundle with Popper -->

    
    <div class="container ">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 laravel , Inc</p>

            <a href="{{ route('/') }}"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img id="bot"src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"width="40"
                    height="32" />
            </a>
            <style>
                #bot {
                    transition-property: width;
                    transition-duration: 5s;
                    transition-delay: 0.1s;
                }

                #bot:hover {
                    width: 70px;
                }
                #bot {
                    transition-property: width;
                    transition-duration: 5s;
                    transition-delay: 0.1s;
                }

                #bot:hover {
                    width: 70px;
                }

            </style>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{ route('/') }}" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="https://laravel.com/docs/9.x" class="nav-link px-2 text-muted">Duc</a></li>
                <li class="nav-item"><a href="{{ route('policy')}}" class="nav-link px-2 text-muted">policy</a></li>
                <li class="nav-item"><a href="{{route('faq')}}" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
