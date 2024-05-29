<template>
  <div class="col-12 row shadow px-0 mx-0 mb-3 fixed-nav py-3">
    <div class="col-12 m-auto px-lg-5">
      <nav class="navbar navbar-expand-lg static-navbar py-0">
        <div class="container-fluid px-0">
          <div class="nav-img-width d-flex align-items-center">
            <button class="navbar-toggler px-0 me-2" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
              <div>
                <img alt="" />
              </div>
            </button>
            <a class="navbar-brand py-0 me-5 me-md-3">
              <img src="http://127.0.0.1:8000/assets/img/bitmap.png" class="nav-logo" width="40" height="40"/>
            </a>
          </div>
          <div class="d-flex d-lg-none align-items-center">
            <div>
              <div class="d-flex">
                <a class="me-2 d-flex align-items-center">
                  <span class="lang-text-nav ms-1">دولار</span>
                </a>
                <a class="me-3 d-flex align-items-center border-start ps-2" hreflang="en">
                  <img width="12" />
                  <span class="lang-text-nav ms-1">En</span>
                </a>
              </div>
            </div>
            <a class="w-37" >
              <div class="d-lg-none dropdown-menu dropdown-user-items-show mt-0 d-block">
                <div class="d-flex">
                  <div class="nav-user-icon sm">
                    <i class="far fa-user font-13-px"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="offcanvas offcanvas-start flex-lg-row" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="d-flex align-items-center d-lg-none">
              <i class="fas fa-times aside-close me-3" data-bs-dismiss="offcanvas"></i>
              <a href="https://grintahub.com">
                <img width="110" />
              </a>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 w-lg-auto pt-3 pt-lg-0">
              <li class="nav-item">
                <a class="nav-link">الفعاليات</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a data-bs-toggle="dropdown" class="nav-link toggle-dropdown">دوري روشن السعودي
                    <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-items-show" aria-labelledby="dropdownMenuButton1">
                    <li>
                      <a class="dropdown-item text-start">الهلال</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">النصر</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الاتحاد</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الاهلي</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a data-bs-toggle="dropdown" class="nav-link toggle-dropdown">الدوريات العالمية
                    <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-items-show" aria-labelledby="dropdownMenuButton1">
                    <li>
                      <a class="dropdown-item text-start">الدوري الإنجليزي الممتاز</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">دوري ابطال اوروبا</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الدوري
                        الاوروبي</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">دوري المؤتمرات الاوروبي</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الدوري الاسباني</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الدوري الايطالي</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">الدوري الفرنسي</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a data-bs-toggle="dropdown" class="nav-link toggle-dropdown">الحفلات الخليجية و العالمية
                    <i class="fas fa-chevron-down ms-2"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-items-show" aria-labelledby="dropdownMenuButton1">
                    <li>
                      <a class="dropdown-item text-start">حفلات الكويت</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">حفلات الامارات</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">حفلات البحرين</a>
                    </li>
                    <li>
                      <a class="dropdown-item text-start">حفلات
                        اديل في ميونخ</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link toggle-dropdown">البطولات الاوروبية
                  </a>
                </div>
              </li>
            </ul>
            <div class="d-flex align-items-center flex-column flex-lg-row">
              <a href="#"
                class="btn btn-primary rounded-5"
                type="submit">
                الدخول</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div>
    <nav id="heading" class="navbar shadow navbar-expand-lg">
      <div class="container-fluid">
        <a title="الرئيسيه">
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
import { RouterLink, RouterView } from 'vue-router'

export default {

  mounted() {
    console.log("jjjjj");
  },
};
</script>
