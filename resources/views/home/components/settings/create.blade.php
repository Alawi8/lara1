<header>
    <html lang="ar" dir="rtl">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.rtl.css') }}" />
</header>

<section class="h-100 gradient-custom-2">
    <div class="container py-9 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-12 col-xl-12">
                <div class="card">
                    <form novalidate action="{{ route('settings.store') }}" method="post"enctype="multipart/form-data">
                        @csrf
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1">

                                <h6 class="text-dark">تحديث الصوره :</h6>
                                <div class="input-group mb-3">
                                    <input type="file"
                                        class="form-control btn btn-outline-dark @error('icon_url') is-invalid @enderror"
                                        id="inputGroupFile01" name="icon_url">
                                </div>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <div class="col-auto">
                                    <input class="form-control @error('site_name') is-invalid @enderror" type="text"
                                        placeholder="عنوان الموقع" aria-label="default input example" name="site_name"
                                        >
                                </div>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">الصور</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">المقالات</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">التعليقات</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">وصف الموقع</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <div class="input-group">
                                        <input class="form-control @error('about') is-invalid @enderror"
                                            aria-label="With textarea" name="about">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            تحديث بيانات الموقع
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
