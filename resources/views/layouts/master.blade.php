<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
</head>

<body>
    <div class="container-fluid">
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
            arial-label="Furni navigation bar">
            <div class="container">
                <a class="navbar-brand" href="index.html">Furni<span>.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                    aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li><a class="nav-link" href="shop.html">Shop</a></li>
                        <li class="active"><a class="nav-link" href="about.html">About us</a></li>
                        <li><a class="nav-link" href="services.html">Services</a></li>
                        <li><a class="nav-link" href="blog.html">Blog</a></li>
                        <li><a class="nav-link" href="contact.html">Contact us</a></li>
                    </ul>
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="#" style="height: 100%"><img
                                    src="{{ asset('assets/images/user.svg') }}" style="width: 15px"></a></li>
                        <li><a class="nav-link" href="#" style="height: 100%"><img
                                    src="{{ asset('assets/images/cart.svg') }}" style="width: 20px"></a></li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="hero">
            @yield('hero')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <footer class="footer-section">
            <div class="container relative">

                <div class="sofa-img">
                    <img src="{{ asset('assets/images/sofa.png') }}" alt="Image" class="img-fluid">
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form">
                            <h3 class="d-flex align-items-center"><span class="me-1"><img
                                        src="{{ asset('assets/images/envelope-outline.svg') }}" alt="Image"
                                        class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                            <form action="#" class="row g-3">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-auto">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a>
                        </div>
                        <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl
                            dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
                            tristique. Pellentesque habitant</p>
                    </div>

                    <div class="col-lg-8">
                        <div class="row links-wrap">
                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Knowledge base</a></li>
                                    <li><a href="#">Live chat</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Our team</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Nordic Chair</a></li>
                                    <li><a href="#">Kruzo Aero</a></li>
                                    <li><a href="#">Ergonomic Chair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="border-top copyright">
                    <div class="row pt-4">
                        <div class="col-lg-6">
                            <p class="mb-2 text-center text-lg-start">Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>2024. All Rights Reserved. — Designed with love by <a
                                    href="https://untree.co">Untree.co</a> Distributed By <a
                                    hreff="https://themewagon.com">ThemeWagon</a>
                            </p>
                        </div>

                        <div class="col-lg-6 text-center text-lg-end">
                            <ul class="list-unstyled d-inline-flex ms-auto">
                                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </footer>
    </div>
</body>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>

</html>
