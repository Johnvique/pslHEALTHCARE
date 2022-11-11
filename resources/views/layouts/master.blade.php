<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PSL Healthcare:Quality & Affordable Healthcare for all People</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="PSL Healthcare" name="keywords">
    <meta content="PSL Healthcare" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-success m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-success me-2"></i>Opening Hours: Monday-Monday;  24hrs /7 days </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-success text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@pslhealthcare.org</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+254734985097 / +254711938908</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
          <img width="100em" height="200em" class="img-fluid" src="img/pslog.jpg" alt="Image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                <a href="{{url('/about_us')}}" class="nav-item nav-link">About</a>
                <a href="{{url('/various_departments')}}" class="nav-item nav-link">Departments</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">What We Do</a>
                    <div class="dropdown-menu m-0">
                    <a href="{{url('/what_we_offer')}}" class="dropdown-item">Services</a>
                    <a href="{{url('/pharmacy')}}" class="dropdown-item">Our Pharmacy</a>
                    </div>
                </div>
                <a href="{{url('/contact_us')}}" class=" text-dark nav-item nav-link active">Contact</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="{{url('/book_appointment')}}" class="btn btn-secondary py-2 px-4 ms-3">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-success p-3" placeholder="Type search keyword">
                        <button class="btn btn-success px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @yield('content')

      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-secondary me-2"></i>Home Page</a>
                        <a class="text-light mb-2" href="about.html"><i class="bi bi-arrow-right text-secondary me-2"></i>Our History</a>
                        <a class="text-light mb-2" href="service.html"><i class="bi bi-arrow-right text-secondary me-2"></i>What We Offer</a>
                        <a class="text-light" href="contact.html"><i class="bi bi-arrow-right text-secondary me-2"></i>Talk To Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Special Clinics</h3>
                    <div class="d-flex flex-column justify-content-start">
                       <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Obstetrics & Gynaecology</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Paediatric</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Surgical-General & Orthopaedics</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>E.N.T</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Gastroenterology</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Physiotherapy</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Mental health & Psychiatry</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-secondary me-2"></i>Opthalmology & Eye care</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-secondary me-2"></i>Star House, Opposite PSV Stage, Ngumba Estate, Behind Garden City Mall, <br> P.O Box 2299-00202, KNH, Nairobi.</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-secondary me-2"></i>info@pslhealthcare.org</p>
                    <p class="mb-0"><i class="bi bi-telephone text-secondary me-2"></i>+254734985097 / +254711938908</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-secondary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-secondary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-secondary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-secondary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">Copyright &copy; <script>document.write(new Date().getFullYear());</script>| <a class="text-white border-bottom" href="http://mtaanitech-hub.co.ke"><span>PSL Healthcare</span></a> | All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


   <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>