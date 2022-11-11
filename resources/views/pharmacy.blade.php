@extends('layouts.master')
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-dark py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Our Pharmacy</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="pharmacy.html" class="h4 text-white">Pharmacy</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-success text-uppercase">Pharmacy Products</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices for our pharmaceutical drugs.</h1>
                    </div>
                    <p class="mb-4">PSL pharmaceutical department oversees the quality of medicines supplied to patients. It ensures that the supply of medicines is within the medical law and that the medicines prescribed to patients are suitable based on health condition.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pharm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-success py-5 p-4">
                                <h4>Section A</h4>
                                <hr class="text-success w-50 mx-auto mt-0">
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pharm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-success py-5 p-4">
                                <h4>Section B</h4>
                                <hr class="text-success w-50 mx-auto mt-0">
                            </div>
                        </div>

                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pharm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-success py-5 p-4">
                                <h4>Section C</h4>
                                <hr class="text-success w-50 mx-auto mt-0">
                            </div>
                        </div>

                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pharm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-success py-5 p-4">
                                <h4>Section D</h4>
                                <hr class="text-success w-50 mx-auto mt-0">
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pharm.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-success py-5 p-4">
                                <h4>Section E</h4>
                                <hr class="text-success w-50 mx-auto mt-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-success p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-secondary px-4">Consult Today</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection