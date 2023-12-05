<!-- JavaScript Bundle with Popper -->
  
  <div class="container ">
  <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      
        {{-- link style.css to disegn header tamplate --}}
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
          <p class="col-md-4 mb-0 text-muted">&copy; جميع الحقوق محفوظه {{date('Y')}}</p>
      <a href="{{ route('home') }}"
              class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img id="bot"src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"width="40"
                  height="32" alt="{{config('app.name')}}"/>
      </a>
      <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted ">الرئيسية</a></li>
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted ">الخصوصية</a></li>
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted ">أسئلة</a></li>
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted ">حول</a></li>
          {{-- Add more navigation items as needed --}}
      </ul>
      </div>
      <style>
        #content img {
        vertical-align: middle
    }
    
    #content {
        word-wrap: break-word
    }
    
    #body {
        width: 100%
    }
    
    #heading {
        -webkit-animation: color-change-2x 2s linear infinite alternate both;
        animation: color-change-2x 2s linear infinite alternate both;
        border-color: rgb(0, 0, 0);
        border-radius: 0 0 12px 12px;
        width: 100%;
        vertical-align: middle
    }
    
     /* @-webkit-keyframes color-change-2x {
        0% {
            background: #f6f6f6
        }
    
        100% {
            background: #b352eb
        }
    }
    
    @keyframes color-change-2x {
        0% {
            background: #f0f0f0
        }
    
        100% {
            background: #b964eb
        }
    }  */
    
    #card-content-posts {
        width: 100%;
        height: 22rem;
        max-zoom: 99px
    }
    
     /* #style-icon {
        animation-name: example;
        animation-duration: 3s;
        animation-iteration-count: 2222
    } 
    
     @keyframes example {
        0% {
            transform: rotate(0deg)
        }
    
        100% {
            transform: rotate(360deg)
        }
    }  */
    
    #categure {
        border: 5px solid;
        border-radius: 20px 20px 20px 20px;
        border-color: rgb(255, 255, 255);
        margin-bottom: 25px;
        box-shadow: 0 0 25px rgb(163, 160, 160)
    }
    
        
    #cate-aleart {
        border-radius: 30px 30px 0 70px
    }
    
    #cate-aleart-button {
        border-radius: 20px 0 0 20px
    }
    
    #in-search {
        border-radius: 0 20px 20px 0
    }
    
    #input_seo {
        height: 50%
    }
    </style>
  </div>
</div>

<!-- Your additional HTML content goes here -->

<!-- Bootstrap JS Bundle with Popper -->
{{-- <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script> --}}