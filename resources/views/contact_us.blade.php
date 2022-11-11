@extends('layouts.master')
@section('content')
  <!-- Hero Start -->
  <div class="container-fluid bg-dark py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="contact.html" class="h4 text-white">Contact</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-success text-uppercase">Contact Us</h5>
                        <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-success me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Our Office</h5>
                            <span>Star House, Opposite PSV Stage,
                                <br>Ngumba Estate, Behind Garden City Mall,P.O Box 2299-00202, KNH, Nairobi.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-success me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>info@pslhealthcare.org</span>
                            <span>appointment@pslhealthcare.org</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-success me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>+254734985097</span><br>
                            <span>+254711938908</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Phone Number" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Leave a message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-12 wow slideInUp text-center" data-wow-delay="0.6s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.792053180785!2d36.88070257233018!3d-1.2319811700188619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15c194c7586b%3A0x650ed8ca43b749a5!2sNgumba%20Estate%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1665595118740!5m2!1sen!2ske" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div> <br> <br>
<!-- Contact End -->
@endsection