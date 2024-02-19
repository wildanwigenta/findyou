<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>FindYou</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
      rel="stylesheet"
    />

    <link href="{{ asset('/') }}assets/portal/css/bootstrap.min.css" rel="stylesheet" />

    <link href="{{ asset('/') }}assets/portal/css/bootstrap-icons.css" rel="stylesheet" />

    <link href="{{ asset('/') }}assets/portal/css/templatemo-topic-listing.css" rel="stylesheet" />
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
  </head>

  <body class="topics-listing-page" id="top">
    <main>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <i class="bi-back"></i>
            <span>FindYou</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#">Home</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
            </div>
        </div>
    </div>
</nav>
        @yield('content_portal')
      
    </main>

    <footer class="site-footer section-padding shadow">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12 mb-4 pb-2">
            <a class="navbar-brand mb-2" href="index.html">
              <i class="bi-back"></i>
              <span>Topic</span>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <h6 class="site-footer-title mb-3">Resources</h6>

            <ul class="site-footer-links">
              <li class="site-footer-link-item">
                <a href="/home" class="site-footer-link">Home</a>
              </li>
              <li class="site-footer-link-item">
                <a href="/myaccount" class="site-footer-link">My Acccount</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
            <h6 class="site-footer-title mb-3">Information</h6>
            <p class="text-white d-flex">
              <a href="mailto:info@company.com" class="site-footer-link">
                findyou@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
            <p class="copyright-text mt-lg-5 mt-4">
              Copyright © 2024 FindYou Team. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('/') }}assets/portal/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/portal/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/portal/js/jquery.sticky.js"></script>
    <script src="{{ asset('/') }}assets/portal/js/custom.js"></script>
  </body>
</html>
