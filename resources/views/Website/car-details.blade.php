@extends('Website.layouts.website')
@section('content')

<style>
    .car-image {
        transition: transform 0.3s; /* Add smooth transition for the hover effect */
    }

    .car-image:hover {
        transform: scale(1.2); /* Adjust the scale factor as needed */
        cursor: pointer;
    }
    .enlarge-image {
        cursor: pointer;
        transition: transform 0.3s;
    }

    .enlarge-image:hover {
        transform: scale(1.2);
    }

</style>

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
        <h1 class="display-3 text-uppercase text-white mb-3">Car Details</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Details</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 mb-5">

                    <h1 class="display-4 text-uppercase mb-5">{{$cars->name}}</h1>
                    <div class="row mx-n2 mb-3">
                        @foreach($cars->images as $cars_image)
                        <div class="col-md-3 col-6 px-2 pb-2">

                            <img class="img-fluid w-100 car-image enlarge-image" src="{{ asset('storage/' . $cars_image->image_path) }}" alt="Image">

                        </div>
                        @endforeach
                    </div>

                    <p>{{$cars->description}}</p>
                    <div class="row pt-2">
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: {{$cars->year}}</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>{{$cars->carSections->type}}</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>{{$cars->transmission}}</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span>Mileage: {{$cars->mileage}} Km</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            @if($cars->availability == 'available')
                            <i class="fa fa-check-circle text-success mr-2"></i>
                            <span class="text-success">Available</span>
                        @elseif($cars->availability == 'reserved')
                            <i class="fa fa-exclamation-circle text-warning mr-2"></i>
                            <span class="text-warning">Reserved</span>
                        @elseif($cars->availability == 'rented')
                            <i class="fa fa-times-circle text-danger mr-2"></i>
                            <span class="text-danger">Rented</span>
                        @endif
                        </div>
                    </div>

               </div>

                <div class="col-lg-4 mb-5">
                    <div class="bg-secondary p-5">
                        <h3 class="text-primary text-center mb-4">Check Availability</h3>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Pickup Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Drop Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                                    data-target="#date1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                    data-target="#time1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Select Person</option>
                                <option value="1">Person 1</option>
                                <option value="2">Person 2</option>
                                <option value="3">Person 3</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Check Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->



<!-- Related Car Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <h2 class="mb-4">Related Cars</h2>
        <div class="owl-carousel main-carousel position-relative" style="padding: 0 30px;">

            @foreach($rcars as $car)
            <div class="col-lg-4 col-md-6 mb-2">
            <div class="rent-item mb-4">
                <div class="owl-carousel car-carousel-{{ $car->id }} mb-4">
                    @foreach($car->images as $car_image)
                        <img class="img-fluid mb-4" src="{{ asset('storage/' . $car_image->image_path) }}" alt="Image">
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


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Add this script in your HTML file or in a separate JavaScript file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.enlarge-image').click(function () {
            var imageUrl = $(this).attr('src');
            $('#enlarged-image').attr('src', imageUrl);
            $('#imageModal').modal('show');
        });

      // Initialize the main carousel
      $('.main-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000, // Set the time between slides in milliseconds (5 seconds in this example)
        nav: false,
        items: 1,
        dots: false,
    });

    // Initialize individual car carousels
    @foreach($rcars as $car)
    $('.car-carousel-{{ $car->id }}').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000, // Set the time between slides in milliseconds (5 seconds in this example)
        nav: false,
        items: 1,
        dots: false,
    });
    @endforeach
    });
</script>
<!-- Add this modal HTML at the end of your body tag -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img id="enlarged-image" class="img-fluid" src="" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>

@endsection



