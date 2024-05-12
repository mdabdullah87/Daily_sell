<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body class="sb-nav-fixed">
    <!-- Top manu bar-->

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-nav shadow-sm border ">
        <a class="navbar-brand" href="#"><img class="logo-img" src="{{ asset('backend/assets/images/logo (1).png') }}" alt="logo"></a>
        <button class="border rounded" id="sidebarToggle" href="#"><i class="fas fa-bars"
                style="color: #000000;"></i></button>
        <!-- manu bar  -->
        <div class="d-flex align-items-center gap">
            <ul class="sb-nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"aria-current="page" data-toggle="dropdown"role="button"
                        aria-expanded="false">Our Servise</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item bg-nav bg bg" href="#">Action</a></li>
                        <li><a class="dropdown-item bg-nav bg bg" href="#">action</a></li>
                        <li><a class="dropdown-item bg-nav bg bg" href="#">action</a></li>
                        <li><a class="dropdown-item bg-nav bg bg" href="#">Separated action</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">setting</a>
                </li>
            </ul>
            <!-- Navbar-->
            <ul class="navbar-nav">
                <li><a class="nav-link" href="#"><i class="fa-solid fa-calculator fa-2x"
                            style="color: #000000;"></i></a></li>
                <li><a class="nav-link" href="#"><i class="fa-solid fa-minimize fa-2x" style="color: #000000;"></i></a>
                </li>
                <li><a class="nav-link" href="#"><i class="fa-regular fa-calendar-days fa-2x"
                            style="color: #000000;"></i></a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa-brands fa-product-hunt fa-2x"
                            style="color: #000000;"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item bg-nav bg bg" href="#">Settings</a>
                        <a class="dropdown-item bg-nav bg bg" href="#">Activity Log</a>

                       

                        <a href="{{ route('logout') }}"
                        class="dropdown-item bg-theme-1-hover dark-bg-dark-3-hover"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i data-feather="toggle-right" class="w-4 h-4 me-2"></i>

                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>

                        
                       
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Top manu bar End-->

    @include("layouts/backendsidebar");

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d13ba7a991.js" crossorigin="anonymous"></script>
    <script src="./style.js"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>

    @yield('script')
</body>

</html>