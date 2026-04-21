

@extends('frontend.layouts.app')
@section('content')
  <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Our Services</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white p-3 w-100" src="{{asset('frontend/assets/img/hero-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white p-3 w-100" src="{{asset('frontend/assets/img/hero-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
  <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Our Services</p>
                <h1 class="display-6 mb-4">We Provide Best Professional Services</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-1.jpg')}}" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Weddings</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-2.jpg')}}" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Portraits</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-3.jpg')}}" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Fashion</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/service-4.jpg')}}" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Editorial</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


     <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Client's Review</p>
                <h1 class="display-6 mb-0">More Than 20000+ Customers Trusted Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-1.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Jessica Martin</h5>
                           <span>Event Planner</span>
                        </div>
                    </div>
                    <p class="mb-0">Working with this team was an absolute pleasure! They captured every moment beautifully, making our wedding day unforgettable. Their professionalism, creativity, and attention to detail exceeded all expectations.
</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-2.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Michael Thompson</h5>
            <span>Entrepreneur</span>
                        </div>
                    </div>
                    <p class="mb-0">        The team’s creativity and professionalism are unmatched. Every shot was perfectly composed, and the final images truly captured the essence of the day.
</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-3.jpg')}}" alt="">
                        <div class="ms-4">
                              <h5 class="mb-1">Samantha Lee</h5>
            <span>Model</span>
                        </div>
                    </div>
                    <p class="mb-0">        Absolutely loved working with this team! Their attention to detail and ability to make every session fun and comfortable is amazing.
</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-4.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Daniel Roberts</h5>
            <span>Graphic Designer</span>
                        </div>
                    </div>
                    <p class="mb-0"> From start to finish, the experience was flawless. Their team made everything easy and enjoyable while delivering exceptional results.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection