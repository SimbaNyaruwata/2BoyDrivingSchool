<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>2 Driving School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>2 Robert Mugabe, Lamond House, Harare, Zimbabwe</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 06.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small> +263 776 251 046</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img src="{{ asset('frontend/img/logo.jpg')}}">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('papers') }}" class="nav-item nav-link active">Papers</a>
                
                <!--<a href="contact.html" class="nav-item nav-link">Contact</a>-->
            </div>
           <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>-->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Revision Papers</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Download Revision Papers</h6>
                <h1 class="display-6 mb-4">Click to download revision papers and revise</h1>
            </div>
            <div class="row g-0 team-items">
    <!-- Row 1 -->
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{ url('download-pdf/' . urlencode('Paper1.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 1</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <a href="{{ url('download-pdf/' . urlencode('Paper2.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-2.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 2</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <a href="{{ url('download-pdf/' . urlencode('Paper3.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 3</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <a href="{{ url('download-pdf/' . urlencode('Paper4.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-2.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 4</h5>
                </div>
            </div>
        </a>
    </div>

    <!-- Row 2 -->
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{ url('download-pdf/' . urlencode('Paper5.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 5</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <a href="{{ url('download-pdf/' . urlencode('Paper6.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 6</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <a href="{{ url('download-pdf/' . urlencode('Paper7.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 7</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <a href="{{ url('download-pdf/' . urlencode('Paper8.pdf')) }}" class="team-link">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2">Paper 8</h5>
                </div>
            </div>
        </a>
    </div>
</div>

        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-2"><i class="fa fa-car text-white me-2"></i>2 Boy</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2 Robert Mugabe, Lamond House, Harare, Zimbabwe
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>263 776 251 046
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">2 Boy Driving School</a>, All Right Reserved.
                </div>
            
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body>

</html>