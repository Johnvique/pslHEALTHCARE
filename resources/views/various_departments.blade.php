@extends('layouts.master')
@section('content')
 <!-- Hero Start -->
 <div class="container-fluid bg-dark py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Specialist Clinics</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="specialists.html" class="h4 text-white">Departments</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- department Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-success text-uppercase">Special Units</h5>
                    <h3 class="display-5 mb-0">Engage our departmental specialists Today.</h3>
                </div>
                <p class="mb-4">PSL Healthcare is endowed with the high-quality care, affordable cost of health services, more advanced treatment options, and the favorable staff-to-patient ratio available at our specialty facilities. Talk to our experts now.</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/psl2.jpeg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- department End -->

<!-- Units Start -->
<div class="container-fluid bg-secondary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.5s">
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/pslog.jpg" alt="">
                        <p class="fs-5">Our gynecologist will always ensure your reproductive care while the obstetricians in the department will ensure that the health of women during and after pregnancy is well taken care of and monitored. </p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-secondary mb-0">Obstetrician & Gynaecologist</h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/pslog.jpg" alt="">
                        <p class="fs-5">PSL Pediatricians provide preventive care and also diagnose and treat infections, injuries and diseases.They Perform regular health and wellness checkups to young patients.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-secondary mb-0">Paediatrician</h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/pslog.jpg" alt="">
                        <p class="fs-5">Our experienced gastroenterologists diagnose, treat, and care for people with a range of gut-related illnesses such as inflammatory bowel disease (IBD) and celiac disease. Consult us now.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-secondary mb-0">Physician/Gatroenterologist</h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/pslog.jpg" alt="">
                        <p class="fs-5">The tecnical surgeons at PSL healthcare will perform surgery to our patients for further exploration of any condition for the purpose of diagnosis, take a biopsy of a suspicious lump and even remove or repair diseased tissues or organs when necessary.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-secondary mb-0">Surgical</h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/pslog.jpg" alt="">
                        <p class="fs-5">Our specialists are experienced and skilled in treating conditions of the ears, nose, and throat. They assist patients in detecting the conditions impacting the head and neck such as tumors or any related complication.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-secondary mb-0">Otolaryngologists (ENT)</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Units End -->
@endsection