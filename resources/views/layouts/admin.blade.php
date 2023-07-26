<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin - @yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/admin/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <link rel="stylesheet" href="/admin/assets/css/components.css">    
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/admin/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='/admin/assets/img/favicon.ico' />
    @yield('css')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="/admin/assets/img/user.png" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Admin Ismi:
                                @if (auth()->check())
                                    <b>{{ auth()->user()->name }}</b>
                                @else
                                    Auth bolmagan
                                @endif
                            </div>
                        
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST" class="mt-0">
                                @csrf
                                <button class="text-danger has-icon dropdown-item" type="submit">Chiqish</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>

            @include('admin.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
            </div>
            </section>


            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="/admin/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="/admin/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="/admin/assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="/admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="/admin/assets/js/custom.js"></script>
    @yield('js')
    <script>

        let url = window.location.href;
        let link = document.querySelectorAll("[href='"+url+"']")[0];
        link.parentElement.classList.add('active');
        
    </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
