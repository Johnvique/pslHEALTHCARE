@extends('layouts.master')
@section('content')
 <!-- Hero Start -->
 <div class="container-fluid bg-dark py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">What We Do</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="service.html" class="h4 text-white">Services</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                    <img width="200em" height="200em" class="position-absolute w-100 h-100" src="img/psl1.jpeg" style="object-fit: cover;">
                    <img width="200em" height="200em" class="position-absolute w-100 h-100" src="img/psl1.jpeg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title mb-5">
                    <h5 class="position-relative d-inline-block text-success text-uppercase">Our Services</h5>
                    <h1 class="display-5 mb-0">We Offer The Best Quality Healthcare Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/outin.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Outpatient & Inpatient</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/labpharm.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Laboratory & Pharmacy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/maternity.png" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Maternity (Normal & C/section)</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/theatre.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Theatre (Minor & Major)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
            <div class="rounded-top overflow-hidden">
                <img width="200em" height="200em" class="img-fluid" src="img/endo.jpg" alt="">
            </div>
            <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Endoscopy & Colonoscopy</h5>
            </div>
        </div>
    </div>
    
    <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/pain.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Chronic Pain management</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/paliative.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Palliative care</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
            <div class="rounded-top overflow-hidden">
                <img width="200em" height="200em" class="img-fluid" src="img/psyk.webp" alt="">
            </div>
            <div class="position-relative bg-light rounded-bottom text-center p-4">
                <h5 class="m-0">Counselling and psychosocial support</h5>
            </div>
        </div>
    </div>

    <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/ecg.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">ECG/Echocardiogram</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img width="200em" height="200em" class="img-fluid" src="img/ultra.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Ultrasound Scanning</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-success rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                    <h3 class="text-white mb-3">Go Cashless!</h3>
                    <p class="text-white mb-3">PSL prioritize in improving the quality and performance by helping our patients with reliable, cost-effective and sustained healthcare services. Get your cashless hospitalization today using your card.</p>
                    <img width="300em" height="500em" class="img-fluid" src="img/card.jpeg" alt="">
                </div>
            </div>
        </div>

    </div>
</div><br><br>
<!-- Service End -->
@endsection