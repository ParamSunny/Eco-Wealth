<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Payment</title>
  <link href="../favicon.png" rel="icon">
  <link href="../apple-touch-icon.png" rel="apple-touch-icon">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="aos.css" rel="stylesheet">
  <link href="swiper-bundle.min.css" rel="stylesheet">
  <link href="glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="head" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="log d-flex align-items-center">
        <a href="index.php"><img src="assets\img\1-removebg-preview.png" alt="" width="180px" height="auto" >
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="logo.png" alt=""> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Eco Card</a></li>
          <li><a class="nav-link scrollto" href="#about-2">Microfinance</a></li>
          <li><a class="nav-link scrollto" href="#about-3">Market place</a></li>
          <li><a class="nav-link scrollto" href="#blog-posts">Blogs</a></li>
          <!-- <li><a class="nav-link scrollto" href="Contact.php">Contact</a></li> -->
        <ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Card Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="Product/index.php">Home</a></li>
            <li class="current">Card Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex justify-content-center pb-5">
                <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
                  <div class="py-4 d-flex flex-row">
                    <h5><span class="far fa-check-square pe-2"></span><b>ELIGIBLE</b> |</h5>
                    <span class="ps-2">Pay</span>
                  </div>
                  <hr />
                  <div class="pt-2">
                    <div class="d-flex pb-2">
                      <div class="ms-auto">
                        <p class="text-primary">
                          <i class="fas fa-plus-circle text-primary pe-1"></i>Add payment card
                        </p>
                      </div>
                    </div>
                    <p>
                      This is an estimate for the portion of your order (not covered by
                      insurance) due today . once insurance finalizes their review refunds
                      and/or balances will reconcile automatically.
                    </p>
                    <form class="pb-3" method="post" action="PaymentScript.php">
                      <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">
                          <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                            value="" aria-label="..." checked />
                        </div>
                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                          <p class="mb-0">
                            <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                            Card
                          </p>
                          <div class="ms-auto">************3456</div>
                        </div>
                      </div>
      
                      <div class="d-flex flex-row">
                        <div class="d-flex align-items-center pe-2">
                          <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                            value="" aria-label="..." />
                        </div>
                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                          <p class="mb-0">
                            <i class="fab fa-cc-mastercard fa-lg text-bodu pe-2"></i>Mastercard
                            Office
                          </p>
                          <div class="ms-auto">************1038</div>
                        </div>
                      </div>
                      <button class="btn btn-success btn-lg" type="submit" name="signUp">Proceed to pay</button>
                    </form>
                  </div>
                </div>
      
                <div class="col-md-5 col-xl-4 offset-xl-1">
                  <div class="py-4 d-flex justify-content-end">
                    <h6><a href="Product/single-product.php">Cancel and return to website</a></h6>
                  </div>
                  <div class="rounded d-flex flex-column p-2 bg-body-tertiary">
                    <div class="p-2 me-3">
                      <h4>Order Recap</h4>
                    </div>
                    <div class="p-2 d-flex">
                      <div class="col-8">Contracted Price</div>
                      <div class="ms-auto">₹345.00</div>
                    </div>
                    <div class="p-2 d-flex">
                      <div class="col-8">Gift Raping</div>
                      <div class="ms-auto">₹0.00</div>
                    </div>
                    <div class="p-2 d-flex">
                      <div class="col-8">Delivery Charges</div>
                      <div class="ms-auto">+ ₹40.00</div>
                    </div>
                    <div class="border-top px-2 mx-2"></div>
                    <div class="p-2 d-flex pt-3">
                      <div class="col-8"><b>Total</b></div>
                      <div class="ms-auto"><b class="text-success">₹385.00</b></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section><!-- /Pricing Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">About Us</h3>
            <p class="mb-4">
            EcoWealth empowers eco-friendly choices with sustainable finance and green products, supporting a greener future for businesses and consumers.
            </p>
            <p class="mb-0">
              <a href="#" class="btn-learn-more">Learn more</a>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Navigation</h3>
            <ul class="list-unstyled float-start me-5">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Find Buyers</a></li>
            </ul>
            <ul class="list-unstyled float-start">
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Sell with us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Connect</h3>
            <ul class="list-unstyled social-icons light mb-3">
              <li>
                <a href="#"><span class="bi bi-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-twitter-x"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google-play"></span></a>
              </li>
            </ul>
          </div>

          <div class="widget">
            <div class="footer-subscribe">
              <h3 class="widget-heading">Subscribe</h3>
              <form action="newsletter.php" method="post" class="php-email-form">
                <div class="mb-2">
                  <input type="text" class="form-control" name="email" placeholder="Enter your email">

                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Eco-Wealth</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="#">EcoFinInnovators</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="bootstrap.bundle.min.js"></script>
  <script src="validate.js"></script>
  <script src="aos.js"></script>
  <script src="swiper-bundle.min.js"></script>
  <script src="purecounter_vanilla.js"></script>
  <script src="glightbox.min.js"></script>
  <script src="imagesloaded.pkgd.min.js"></script>
  <script src="isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="main.js"></script>

</body>

</html>