@extends('Website.layouts.website')
@section('content')

   <!-- Search Start -->
   <div class="container-fluid bg-white pt-3 px-lg-5">
    <div class="row mx-n2">
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Pickup Location</option>
                <option value="1">Location 1</option>
                <option value="2">Location 2</option>
                <option value="3">Location 3</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Drop Location</option>
                <option value="1">Location 1</option>
                <option value="2">Location 2</option>
                <option value="3">Location 3</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="date mb-3" id="date" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                    data-target="#date" data-toggle="datetimepicker" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="time mb-3" id="time" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                    data-target="#time" data-toggle="datetimepicker" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Select A Car</option>
                <option value="1">Car 1</option>
                <option value="2">Car 1</option>
                <option value="3">Car 1</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Search</button>
        </div>
    </div>
</div>
<!-- Search End -->


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">About</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">About</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Drive Wave</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4" src="{{asset('Website/img/about.png')}}" alt="">
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


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                    <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="{{asset('Website/img/banner-left.png')}}" alt="">
                    <div class="text-right">
                        <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                        <p class="mb-4">We Give Driving Lessons For Good Prices. Leave It To Us.</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                    <div class="text-left">
                        <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                        <p class="mb-4">Say No More. Find Your Perfect Ride with Us!</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                    <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="{{asset('Website/img/banner-right.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


    <!-- Vendor Start -->
    <div class="container-fluid">
        <div class="container ">
            <h2 class="mb-4">Our Brands</h2>
            <div class="owl-carousel vendor-carousel">
                @foreach($brands as $brand)
                <div class=" p-4">
                    <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="Brand Logo">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Vendor End -->


@endsection
