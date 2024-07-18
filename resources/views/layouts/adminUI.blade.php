<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageName', 'VAPES') &middot; Vape Nairobi</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        .gradient-header {
            /* fallback for old browsers */
            background: #fbc2eb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 0.65), rgba(166, 193, 238, 0.85));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(251, 194, 235, 0.65), rgba(166, 193, 238, 0.85))
        }

        .introducing {
            font-weight: 700;
            font-size: 5rem;
            padding-top: 10% !important;
        }

        .introducing-product {
            font-weight: 700;
            font-size: 5rem;
        }

        .category-header {
            font-weight: 600;
            font-size: 5rem;
            text-align: center;
        }

        .category-explanation {}

        .gradient-vapes {
            background: #48c6ef;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(72, 198, 239, 0.25), rgba(111, 134, 214, 0.25));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(72, 198, 239, 0.25), rgba(111, 134, 214, 0.25))
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: rgba(72, 198, 239, 0.85);">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <span data-mdb-collapse-init class="navbar-toggler" data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </span>
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 visible-sm mt-lg-0" href="{{ route('landing') }}">
                <img src="/vape-Nairobi.png" height="35" alt="Vape Nairobi Logo" loading="lazy" />
            </a>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create')}}">Add New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.productList')}}">View Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.siteStatistics')}}">Site Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Others</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <ul class="navbar-nav flex-row">
                    <!-- Icons -->
                    <li class="nav-item">
                        <a class="nav-link pe-2" href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#!">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#!">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2" href="#!">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <!-- <br class="mt-5"> -->

    <div class="container-fluid pt-5 gradient-header">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block fw-bold">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-decoration-none text-dark">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a href="" class="me-4 text-decoration-none text-dark">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="me-4 text-decoration-none text-dark">
                    <i class="fab fa-google fa-2x"></i>
                </a>
                <a href="" class="me-4 text-decoration-none text-dark">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="me-4 text-decoration-none text-dark">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Vape Nairobi Distributers Limited
                        </h6>
                        <p>
                            We are a passionate company located in the heart of Nairobi, dedicated
                            to deliver vape pens, vape devices and vape E-liquids. By browsing in our sites you agree
                            that you are 21 years and above.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="{{ route('disposables') }}" class="text-decoration-none text-dark">Disposable
                                Vapes</a>
                        </p>
                        <p>
                            <a href="{{ route('devices') }}" class="text-decoration-none text-dark">Vape Devices</a>
                        </p>
                        <p>
                            <a href="{{ route('e-liquids') }}" class="text-decoration-none text-dark">Vape E-Liquids</a>
                        </p>
                        <p>
                            <a href="{{ route('others') }}" class="text-decoration-none text-dark">Accessories</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="{{ route('disposables') }}" class="text-decoration-none text-dark">Product
                                Categories</a>
                        </p>
                        <p>
                            <a href="{{ route('terms') }}" class="text-decoration-none text-dark">Terms & Conditions</a>
                        </p>
                        <p>
                            <a href="{{ route('legal') }}" class="text-decoration-none text-dark">Legal Notice</a>
                        </p>
                        <p>
                            <a href="{{ route('help') }}" class="text-decoration-none text-dark">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Westlands, Nairobi Kenya</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@vapenairobi.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +254 721 683375</p>
                        <p><i class="fas fa-phone me-3"></i> +254 721 683375</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © {{ date('Y') }} Copyright:
            <a class="fw-bold text-decoration-none" href="https://vapenairobi.com/">VapeNairobi.com</a> | Developed by
            <a class="fw-bold text-decoration-none" href="https://linktr.ee/wanjaswilly">Wilson Wanja</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>