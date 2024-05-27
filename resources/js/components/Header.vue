

<template>
  <div >
    <nav id="heading" class="navbar shadow navbar-expand-lg">
      <div class="container-fluid">
        <a  title="الرئيسيه">
          <img id="myImage" src="http://127.0.0.1:8000/assets/img/bitmap.png" width="40" height="40" alt="re" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item h5">
              <RouterLink to="/" class="nav-link">الرئيسيه</RouterLink>
            </li>
          
            <li class="nav-item h5">
              <RouterLink to="/about" class="nav-link" title="التصنيفات">الدورات</RouterLink>
            </li>
            <li class="nav-item h5">
              <RouterLink to="/about" class="nav-link" title="التصنيفات">عنا</RouterLink>
            </li>
            <li class="nav-item h5">
              <RouterLink to="/about" class="nav-link" title="التصنيفات">خدماتنا</RouterLink>
            </li>
            <li class="nav-item h5">
              <RouterLink to="/about" class="nav-link" title="التصنيفات">الخصوصيه</RouterLink>
            </li>

            <div class="btn-group">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="nav-item h5">التصنيفات</p>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Menu item</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Menu item</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Menu item</a>
                </li>
              </ul>
            </div>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="btn btn-primary rounded-5" href="">الدخول</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
import { RouterLink , RouterView } from 'vue-router'

export default {

  mounted() {
    console.log("jjjjj");
  },
};
</script>
