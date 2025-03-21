@extends('dash.layouts.header')
@section('title')
الاشعارات
@endsection
@section('content')
    <!--
            =========================================================
            * Material Dashboard 2 - v3.0.4
            =========================================================

            * Product Page: https://www.creative-tim.com/product/material-dashboard
            * Copyright 2022 Creative Tim (https://www.creative-tim.com)
            * Licensed under MIT (https://www.creative-tim.com/license)
            * Coded by Creative Tim

            =========================================================

            * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
            -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <title>
            Material Dashboard 2 by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" /> --}}
    </head>

    <body class="g-sidenav-show  bg-gray-200">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="card mt-4">
                            <div class="card-header p-3">
                                <h5 class="mb-0">Alerts</h5>
                            </div>
                            <div class="card-body p-3 pb-0">
                                <div class="alert alert-primary alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple primary alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-secondary alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple secondary alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple success alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple danger alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple warning alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-info alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple info alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-light alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple light alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-dark alert-dismissible text-white" role="alert">
                                    <span class="text-sm">A simple dark alert with <a href="javascript:;"
                                            class="alert-link text-white">an example link</a>. Give it a click if you
                                        like.</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header p-3">
                                <h5 class="mb-0">Notifications</h5>
                                <p class="text-sm mb-0">
                                    Notifications on this page use Toasts from Bootstrap. Read more details <a
                                        href="https://getbootstrap.com/docs/5.0/components/toasts/"
                                        target="">here</a>.
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button"
                                            data-target="successToast">Successs</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                                        <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button"
                                            data-target="infoToast">Info</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                                        <button class="btn bg-gradient-warning w-100 mb-0 toast-btn" type="button"
                                            data-target="warningToast">Warning</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                                        <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                                            data-target="dangerToast">Danger</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-fixed bottom-1 end-1 z-index-2">
                    <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast"
                        aria-atomic="true">
                        <div class="toast-header border-0">
                            <i class="material-icons text-success me-2">
                                check
                            </i>
                            <span class="me-auto font-weight-bold">Material Dashboard </span>
                            <small class="text-body">11 mins ago</small>
                            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast"
                                aria-label="Close"></i>
                        </div>
                        <hr class="horizontal dark m-0">
                        <div class="toast-body">
                            Hello, world! This is a notification message.
                        </div>
                    </div>
                    <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive"
                        id="infoToast" aria-atomic="true">
                        <div class="toast-header bg-transparent border-0">
                            <i class="material-icons text-white me-2">
                                notifications
                            </i>
                            <span class="me-auto text-white font-weight-bold">Material Dashboard </span>
                            <small class="text-white">11 mins ago</small>
                            <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast"
                                aria-label="Close"></i>
                        </div>
                        <hr class="horizontal light m-0">
                        <div class="toast-body text-white">
                            Hello, world! This is a notification message.
                        </div>
                    </div>
                    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive"
                        id="warningToast" aria-atomic="true">
                        <div class="toast-header border-0">
                            <i class="material-icons text-warning me-2">
                                travel_explore
                            </i>
                            <span class="me-auto font-weight-bold">Material Dashboard </span>
                            <small class="text-body">11 mins ago</small>
                            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast"
                                aria-label="Close"></i>
                        </div>
                        <hr class="horizontal dark m-0">
                        <div class="toast-body">
                            Hello, world! This is a notification message.
                        </div>
                    </div>
                    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast"
                        aria-atomic="true">
                        <div class="toast-header border-0">
                            <i class="material-icons text-danger me-2">
                                campaign
                            </i>
                            <span class="me-auto text-gradient text-danger font-weight-bold">Material Dashboard </span>
                            <small class="text-body">11 mins ago</small>
                            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast"
                                aria-label="Close"></i>
                        </div>
                        <hr class="horizontal dark m-0">
                        <div class="toast-body">
                            Hello, world! This is a notification message.
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

    </html>
@endsection
