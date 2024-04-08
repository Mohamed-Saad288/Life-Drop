<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/navPage.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--   Font Awesome  -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" href="image/loader.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Life Drop</title>
</head>
<body>

<!-- Loading Screen -->
<div class="loading-screen" id="loading-screen">
    <img class="loader" src="image/loader.png" alt="">
</div>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" id="Nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="image/logo.png" class="logo" alt="">
        </a>
        <!-- Navbar Brand -->
        <button class="navbar-toggler" style="border: 0; color: transparent;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <label class="hamburger">
                <input type="checkbox">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @auth()
                    <li class="nav-item" style="font-size: 17px; color: white">
                      Welcome  {{ ucwords(auth()->user()->name) }}
                    </li>
                    @can('admin')
                        <li>
                            <a class="nav-link" href="/admin">Admin</a>
                        </li>
                    @endcan
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                                <input class="btn btn-danger" type="submit" value="logout">
                        </form>
                    </li>
                    @else
                    <a class="nav-link" data-translate="nav-home" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-translate="nav-about" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-translate="nav-con" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-translate="nav-log" href="/login">Log in</a>
                </li>

                @endauth

                <div>
                    <div class="dropdown-list" >
                        <button id="englishText" class="language-button" onclick="changeLanguage('en')">
                            <img width="28" height="28" src="https://img.icons8.com/color/48/great-britain-circular.png" alt="great-britain-circular"/>
                            <span>EN</span>
                        </button>
                    </div>

                    <div class="dropdown-list" >
                        <button id="arabicText" class="language-button" onclick="changeLanguage('ar')">
                            <img width="28" height="28" src="https://img.icons8.com/fluency/48/egypt-circular.png" alt="egypt-circular"/>
                            <span>عربي</span>
                        </button>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar -->
{{$slot}}

<!-- Footer -->
<footer class="pt-4 mt-1 text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h2 class="text-uppercase fw-bold mb-4">
                        Life Drop
                    </h2>
                    <p data-translate="footer-about">
                        A website that tries to help people save blood and helping people in emergency situations to obtain blood as quickly as possible.
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" data-translate="contact">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Life Drop Team
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- Scroll Section -->
<div class="scrollBtn active" href="#" >
    <i class="fas fa-angle-double-up" aria-hidden="true"></i>
</div>
<script src="assets/js/script.js"></script>
<script src="assets/js/lang.js"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

<x-flash />
</body>
</html>
