<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Reliance Spinning Mills')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .logo {
            max-height: 70px;
        }

        .navbar-nav .nav-link {
            font-size: 15px;
            font-weight: 400;
            color: #5a3a2b;
            padding: 0;
            letter-spacing: 0.5px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #000;
            text-decoration: underline;
            text-underline-offset: 6px;
        }

        .about-section {
            background-color: #ffffff;
        }

        .about-title {
            font-family: "Times New Roman", Georgia, serif;
            font-size: 48px;
            font-weight: 500;
            color: #4b1f16;
            letter-spacing: 2px;
        }

        .about-section p {
            font-size: 16px;
            line-height: 1.9;
            color: #6f6f6f;
            text-align: justify;
        }

        /* Dropdown on hover */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .nav-item.dropdown:hover>.nav-link {
            color: #000; /* hover color */
            text-decoration: underline;
        }


        .dropdown-menu {
    background-color: #000; /* black background */
}

.dropdown-menu .dropdown-item {
    color: #fff; /* white text */
}

.dropdown-menu .dropdown-item:hover {
    background-color: #333; /* dark gray hover effect */
    color: #fff;
}

.nav-item.dropdown .dropdown-toggle::after {
    display: none;
}
    </style>
</head>

<body>

    <!-- Navbar (appears on all pages) -->
    <div class="container-fluid bg-white border-bottom sticky-top">
        <div class="container">
            <div class="row align-items-center py-3">
                <!-- Logo -->
                <div class="col-lg-4 col-md-4">
                    <img src="https://reliancespinningnepal.com/wp-content/uploads/2024/05/RSN-Logo-1.png"
                        class="img-fluid logo" alt="Reliance Spinning Mills">
                </div>

                <!-- Navbar -->
                <div class="col-lg-8 col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav w-100 justify-content-between text-center">
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}">Home</a></li>

                                <!-- About Us Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}" id="aboutDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                        <li><a class="dropdown-item"
                                                href="{{ route('Overview') }}">Company Overview</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('about') }}#team">Our Team</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('Ourhistory') }}#history">Our History</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}"
                                        href="{{ route('products') }}">Products</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('investor') ? 'active' : '' }}"
                                        href="{{ route('investor-relations') }}">Investor Relations</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}"
                                        href="{{ route('careers') }}">Careers</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('notice') ? 'active' : '' }}"
                                        href="{{ route('notice') }}">Notice</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                        href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Page-specific content -->
    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
