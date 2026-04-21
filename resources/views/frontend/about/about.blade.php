

@extends('frontend.layouts.app')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3 img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid bg-light p-3" src="{{asset('frontend/assets/img/about-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid bg-light p-3" src="{{asset('frontend/assets/img/about-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">About Us</p>
                         <h1 class="display-6 mb-4">We Are Creative And Professional Photographers</h1>
<p>
    With a passion for storytelling and an eye for authentic emotion, we specialize in
    capturing life’s most meaningful moments with creativity and care. Whether it's a
    heartfelt wedding, a natural portrait, or a custom session, our goal is to create
    timeless imagery that reflects your personality and your story.
</p>
<p>
    Based in Australia, our studio combines artistic vision with professional technique,
    ensuring every session is crafted with precision, comfort, and attention to detail.
    We believe that great photography is not just about beautiful images—it’s about an
    experience you’ll remember just as fondly as the final photos.
</p>
                        <div class="row g-2 mb-4">
    <div class="col-sm-6">
        <i class="fa fa-check text-primary me-3"></i>Quality Products
    </div>
    <div class="col-sm-6">
        <i class="fa fa-check text-primary me-3"></i>Custom Packages
    </div>
    <div class="col-sm-6">
        <i class="fa fa-check text-primary me-3"></i>Online Booking
    </div>
    <div class="col-sm-6">
        <i class="fa fa-check text-primary me-3"></i>Home Delivery Options
    </div>
</div>
                        {{-- <a class="btn btn-primary py-3 px-5" href="">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Why Choose Us!</p>
                <h1 class="display-6 mb-5">The Leading Photo Studio In The Country</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="fact-item bg-light text-center h-100 p-5">
        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">35</h1>
        <h4 class="mb-3">Award Winning</h4>
        <span>
            Recognized for excellence in creativity and storytelling, our studio has earned 
            numerous awards celebrating our commitment to capturing unforgettable moments.
        </span>
    </div>
</div>

<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="fact-item bg-light text-center h-100 p-5">
        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">45</h1>
        <h4 class="mb-3">Years Experience</h4>
        <span>
            With decades of combined experience, we bring professional expertise, artistic 
            vision, and deep industry knowledge to every shoot we take on.
        </span>
    </div>
</div>

<div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.5s">
    <div class="fact-item bg-light text-center h-100 p-5">
        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">12345</h1>
        <h4 class="mb-3">Happy Clients</h4>
        <span>
            From weddings to portraits and beyond, we’ve had the privilege of creating 
            meaningful memories for thousands of clients who trust our work and love their results.
        </span>
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-xxl px-0 py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Our Team</p>
            <h1 class="display-6 mb-0">Creative Photograher And Videographer</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-sm-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/team-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
    <h4>Sophia Carter</h4>
    <span>Photographer</span>
</div>
<p>
    Sophia brings a creative eye and a warm, natural style to every session, capturing genuine 
    moments and timeless portraits clients love.
</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/team-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Jesse Joslin</h4>
                                <span>Videographer</span>
                            </div>
                            <p>    Jesse Joslin brings stories to life through cinematic visuals, capturing every moment with clarity, creativity, and emotion.
                            </p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-lg-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/team-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Richard Archer</h4>
                                <span>Retoucher</span>
                            </div>
                              <p>
                                    Richard perfects every image with meticulous attention to detail, enhancing colors, tones, and textures to bring each photo to life.

                              </p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/team-4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Olivia</h4>
                                <span>Editor</span>
                            </div>
                            <p> Olivia brings stories to life through precise editing, ensuring every video and image looks polished, seamless, and visually stunning.</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection