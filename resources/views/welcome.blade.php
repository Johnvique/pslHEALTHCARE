@extends('layouts.master')
@section('content')

     <!--Carousel Start -->
     <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/psl2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To PSL Healthcare</h5>
                            <h3 class="display-3 text-white mb-md-4 animated zoomIn">Get quality & affordable healthcare service today.</h3>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="about.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Our History</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/hospital.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Live a healthy Lifestyle</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Consult with our health experts Now</h1>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="about.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Why Us</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/ken.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Our Specialist Clinics</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Visit our Obstetric, Gynaeconology & Paediatric clinic Now.</h1>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="specialists.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">More Special Care</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/psl2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">24 Hours Service</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">Your convenient and reliable healthcare patner</h3>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="contact.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Engage Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-success d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Monday to Monday</h6>
                            <p class="mb-0">We Operate 24hours/7days</p>
                        </div>
                        <a class="btn btn-secondary" href="appointment.html">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Consult A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>How can we help?</option>
                            <option value="0">Outpatient & Inpateint</option>
                            <option value="1">Laboratory Test</option>
                            <option value="2">Pharmacy Section</option>
                            <option value="3">Maternity Service</option>
                            <option value="4">Major/Minor Theatre</option>
                            <option value="5">Ultrasound Scanning</option>
                            <option value="6">Surgery Services</option>
                            <option value="7">Specialists Clinic</option>
                        </select>
                        <a class="btn btn-secondary" href="appointment.html">Get Service</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-success d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">We here to assist you before, during and after your visit to PSL Healthcare. Book an appointment today and find everything you need to make your visit productive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


     <!--Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Save 30% On Your monthly health Checkup</h1>
                        <p class="text-white mb-4">As PSL Healthcare professionals, we fully understand the right to health for all people. Everyone should have access to the quality health services they need, when and where they need them, without suffering financial hardship. No one should get sick and die just because they are poor, or because they cannot access the health services they need and that is why we would not need our clients to suffer the financial burden when seeking for our medical attentions. Get the offer today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-secondary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/client.png" alt="">
                            <p class="fs-5"><em>"Hello PSL Healthcare, your practice is great. The services you provide are incredible and the patient experience you provide are unmatched. Thanks for saving my daughter's life"</em></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Nancy Muthoni,Mathare resident</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/client.png" alt="">
                            <p class="fs-5"><em>"Their personalized approach to patient care is outstanding. Asanteni!"</em></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Jared Kilonzo,Baba Dogo resident</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/client.png" alt="">
                            <p class="fs-5"><em>"PSL clinical care is outstanding but what really sets them apart is that they truly care about the well-being of their patients."</em></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Jacob Ng'etich,Kasarani resident</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Testimonial End -->
    
@endsection