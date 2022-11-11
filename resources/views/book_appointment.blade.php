@extends('layouts.master')
@section('content')
 <!-- Hero Start -->
 <div class="container-fluid bg-dark py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Appointment</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid bg-secondary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">PSL Principle of operations.</h1>
                    <p class="text-white mb-0">PSL Healthcare is guided by the principle of "Patients First." Through our Office of Patient Experience, numerous best practices have been implemented in order to improve overall patient experience, including Empathy,Shared medical appointments, availability of long-distance care through our distance health program as well as opportunities for same-day appointments.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h3 class="text-white mb-4">Book Service</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                        <option selected>Select A Service</option>
                        <option value="0">Outpatient & Inpateint</option>
                        <option value="1">Laboratory Test</option>
                        <option value="2">Pharmacy Section</option>
                        <option value="3">Maternity Service</option>
                        <option value="4">Major/Minor Theatre</option>
                        <option value="5">Ultrasound Scanning</option>
                        <option value="6">Surgery Services</option>
                        <option value="7">Specialists Clinic</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit"><a href="mailto:appointment@pslhealthcare.org" class="btn btn-dark py-2 px-4 ms-3">Submit Final Appointment</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<!-- Appointment End -->
@endsection