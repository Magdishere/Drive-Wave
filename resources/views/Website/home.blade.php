@extends('Website.layouts.website')
@section('content')

@include('Website.Includes.search')

<!-- Carousel Start -->
<div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($slides as $key => $slide)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <img class="w-100" src="{{ asset('storage/' . $slide->image_path) }}" style="height: 600px;" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">{{ $slide->title }}</h4>
                        <h1 class="display-1 text-white mb-md-4">{{ $slide->sub_title }}</h1>
                        <a href="" class="btn btn-primary brn-md py-md-3 px-md-5 mt-2">Visit Link</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
            <div class="btn" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2" aria-hidden="true"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
            <div class="btn" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2" aria-hidden="true"></span>
            </div>
        </a>
    </div>
</div>


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">01</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Drive Wave</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4" src="Website/img/about.png" alt="">
                <p>Welcome to Drive Wave, your premier destination for a seamless and exhilarating car rental experience. At Drive Wave, we pride ourselves on delivering more than just vehicles; we provide a journey tailored to your needs. With a fleet of meticulously maintained cars and a commitment to customer satisfaction, Drive Wave ensures that every drive is a statement of style and comfort. Whether you're navigating city streets or embarking on a scenic road trip, our diverse range of vehicles caters to your desires. Our mission is to make every mile memorable, offering not just transportation but an opportunity to embrace the freedom of the open road. Discover the Drive Wave difference – where reliability meets luxury, and your road adventure begins.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-headset text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-car text-secondary"></i>
                    </div>
                    <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">02</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center rounded justify-content-center bg-primary ml-n8" style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{ asset('storage/' . $service->image_path) }}" alt="Image">
                            </div>
                            <h1 class="display-4 mt-n2 m-0">${{$service->price}}</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">{{$service->name}}</h4>
                        <p class="m-0">{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-banner py-5 px-4 text-center">
            <div class="py-5">
                <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                <p class="mb-4">Only for Sunday from 1st Jan to 30th Jan 2045</p>
                <a class="btn btn-primary mt-2 py-3 px-5" href="">Register Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">03</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
        <div class="row">
            @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4 ">

                    <div class="owl-carousel car-carousel owl-carousel-{{ $car->id }}" >

                        @foreach($car->images as $car_image)

                            <img class="img-fluid mb-4 car-image" src="{{ asset('storage/' . $car_image->image_path) }}" alt="Image" >

                       @endforeach
                    </div>
                    <h4 class="text-uppercase mb-4">{{$car->name}}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{$car->year}}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>{{$car->transmission}}</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>{{$car->mileage}}Km</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="{{route('car-details' , ['id'=>$car->id])}}">{{$car->price_per_day}} $/Day</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Rent A Car End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center">04</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            <div class="team-item">
                <img class="img-fluid w-100" src="Website/img/team-1.jpg" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="Website/img/team-2.jpg" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="Website/img/team-3.jpg" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="Website/img/team-4.jpg" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                    <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="Website/img/banner-left.png" alt="">
                    <div class="text-right">
                        <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                    <div class="text-left">
                        <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                    <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="Website/img/banner-right.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center">05</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="Website/img/testimonial-1.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="Website/img/testimonial-2.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="Website/img/testimonial-3.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="Website/img/testimonial-4.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">06</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
        <div class="row">
            <div class="col-lg-7 mb-2">
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2">
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Head Office</h5>
                            <p>Mar Elias Street, Kousba El Koura, Lebanon</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Branch Office</h5>
                            <p>Riyad El Solh Street, Beirut, Lebanon</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Customer Service</h5>
                            <p>drivewave@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Return & Refund</h5>
                            <p class="m-0">magdelzalameh6@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


@include('Website.Includes.vendor')


@endsection





