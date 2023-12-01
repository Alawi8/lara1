<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-r3t0q1iEXw3kmSL6U2F/GdckH6UqimZE0mI8oDkEmxhI6TqEsI5Wqy2t4GAdRStw" crossorigin="anonymous">

    <!-- Your other head elements go here -->
    <title>صفحة الملف الشخصي</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">الملف الشخصي</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الملف الشخصي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الإعدادات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- جهة اليسار - معلومات الملف الشخصي -->
            <div class="col-md-3">
                <!-- يمكنك عرض معلومات الملف الشخصي هنا -->
                <h4>معلومات الملف الشخصي</h4>
                <p>اسم الموقع: {{ $siteName }}</p>
                <p>نبذة: {{ $about }}</p>
                <img src="{{ $iconUrl }}" alt="صورة الملف الشخصي" class="img-fluid">
            </div>

            <!-- جهة اليمين - نموذج التحديث -->
            <div class="col-md-9">
                <div class="container">
                    <h2 class="mb-4">تحديث الملف الشخصي</h2>

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="site_name" class="form-label">اسم الموقع</label>
                            <input type="text" class="form-control @error('site_name') is-invalid @enderror" id="site_name" name="site_name" value="{{ old('site_name') }}" required>
                            @error('site_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="about" class="form-label">نبذة</label>
                            <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" rows="4" required>{{ old('about') }}</textarea>
                            @error('about')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="icon_url" class="form-label">صورة الملف الشخصي</label>
                            <input type="file" class="form-control @error('icon_url') is-invalid @enderror" id="icon_url" name="icon_url" required>
                            @error('icon_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">تحديث الملف الشخصي</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-oNlrW9qxFz9cZl11BwBHiqZLI8J11Etbp7T+Axh9e/6QApPfOc9oLUx6hBTOi1hx" crossorigin="anonymous"></script>
</body>
</html>
